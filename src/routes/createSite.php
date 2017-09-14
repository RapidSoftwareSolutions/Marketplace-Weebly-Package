<?php

$app->post('/api/Weebly/createSite', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','userId','domain']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'apiKey','apiSecret'=>'apiSecret','userId'=>'userId','domain'=>'domain'];
    $optionalParams = ['brandName'=>'brand_name','brandUrl'=>'brand_url','publishUpsellUrl'=>'publish_upsell_url','upgradeUrl'=>'upgrade_url','planId'=>'plan_id','term'=>'term','timeZone'=>'time_zone','timeFormat'=>'time_format','dateFormat'=>'date_format','siteTitle'=>'site_title','sourceUserId'=>'user_id','sourceSiteId'=>'site_id'];
    $bodyParams = [
       'json' => ['domain','brand_name','brand_url','publish_upsell_url','upgrade_url','plan_id','term','time_zone','time_format','date_format','site_title','site_title']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $client = $this->httpClient;
    $query_str = "https://api.weeblycloud.com/user/{$data['userId']}/site";

    $data['copy_source']['site_id'] = $data['site_id'];
$data['copy_source']['user_id'] = $data['user_id'];

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["X-Public-Key"=>"{$data['apiKey']}", "X-Signed-Request-Hash"=>"$hash"];
     

    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});