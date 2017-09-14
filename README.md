[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Weebly/functions?utm_source=RapidAPIGitHub_WeeblyFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Weebly Package
Weebly is a complete platform that allows anyone to start and grow an online business with curated website templates, powerful ecommerce and integrated marketing.
* Domain: [Weebly](https://www.weebly.com/)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Please request apiKey and apiSecret at bd@weebly.com

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Weebly.getAccount
Get my account information

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret

## Weebly.fullUpdateAccount
Updates the Weebly Cloud account fields for a given account. 

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| brandName       | String     | Your brand name. Displays in the footer of any free sites.
| brandUrl        | String     | Full url to your website. The link in the footer of a published site will go to this site. 
| upgradeUrl      | String     | Full url to your upgrade manager.
| publishUpsellUrl| String     | Full url to your publish promotion.
| billingUrl      | String     |  This url is only used with the cPanel plugin.

## Weebly.partUpdateAccount
Updates the provided Weebly Cloud account fields for a given account. 

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| brandName       | String     | Your brand name. Displays in the footer of any free sites.
| brandUrl        | String     | Full url to your website. The link in the footer of a published site will go to this site. 
| upgradeUrl      | String     | Full url to your upgrade manager.
| publishUpsellUrl| String     | Full url to your publish promotion.
| billingUrl      | String     |  This url is only used with the cPanel plugin.

## Weebly.listSiteBlogs
Returns the blog_id, page_id, and title for all blogs on a given site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.getSingleBlog
Returns all fields for a specific blog

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| blogId   | String     | Id of the blog

## Weebly.listBlogPosts
Returns the post_id, post_title, created_date, site_id, and user_id for all posts for a given blog.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| blogId   | String     | Id of the blog

## Weebly.getSinglePost
Returns all fields for a given blog post.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| blogId   | String     | Id of the blog
| postId   | String     | Id of the post

## Weebly.createPost
Creates a blog post for the given blog.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| blogId       | String     | Id of the blog
| postBody     | String     | Body of the post
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| postTitle    | String     | Title of the post
| tags         | List       | Array of post tags
| allowComments| Select     | Whether comments are allowed

## Weebly.partPostUpdate
Updates a blog post. 

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| blogId       | String     | Id of the blog
| postId       | String     | Id of the post
| postBody     | String     | Body of the post
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| postTitle    | String     | Title of the post
| tags         | List       | Array of post tags
| allowComments| Select     | Whether comments are allowed

## Weebly.fullPostUpdate
Replaces the blog post, using any given values. 

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| blogId       | String     | Id of the blog
| postId       | String     | Id of the post
| postBody     | String     | Body of the post
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| postTitle    | String     | Title of the post
| tags         | List       | Array of post tags
| allowComments| Select     | Whether comments are allowed

## Weebly.deletePost
Deletes the given blog post.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| blogId   | String     | Id of the blog
| postId   | String     | Id of the post

## Weebly.listForms
​Returns an array of forms for the given site.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| query        | String     | Use this parameter to retrieve only forms that have a full text search match based on the form_name and site_title.
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortby       | String     | Field name to sort on.
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.getSingleForm
Returns a form, given the ID.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| formId   | String     | Id of the form

## Weebly.listFormEntries
​Returns an array of form entries for the given site. 

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| formId       | String     | Id of the form
| query        | String     | Use this parameter to retrieve only forms that have a full text search match based on the form_name and site_title.
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.getSingleFormEntry
Returns a specific entry ID for a given form.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| formId   | String     | Id of the form
| entryId  | String     | Id of the form entry

## Weebly.listSiteMembers
​Returns the following fields for all members of a given site

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| query        | String     | Use this parameter to retrieve only forms that have a full text search match based on the form_name and site_title.
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortby       | Select     | Field name to sort by. Sortable fields: site_memeber_id, name, email.
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.getSingleMember
Returns all fields for the given member.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| memberId | String     | Id of the member

## Weebly.createMember
Creates a new member for the site.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| apiSecret         | credentials| Your API secret
| userId            | String     | Id of the user
| siteId            | String     | Id of the site
| email             | String     | user email
| name              | String     | user name
| password          | String     | user password
| welcomeMessage    | String     | user welcome message
| sendWelcomeMessage| Select     | Whether to send welcome message

## Weebly.updateMember
Updates the given properties of a member.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| memberId | String     | Id of the member
| email    | String     | user email
| name     | String     | user name
| groupIds | List       | User groups
| pageIds  | List       | User pages

## Weebly.deleteMember
Deletes the given member.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| memberId | String     | Id of the member

## Weebly.listSiteGroups
​Returns an array of groups for the given site.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| query        | String     | Use this parameter to retrieve only groups that have a full text search match based on the query string.
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortby       | Select     | Field name to sort by. Sortable fields: user_id, site_group_id, name.
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.getSingleGroup
Returns all fields for a given group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| groupId  | String     | Id of the group

## Weebly.createGroup
Creates a new group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| name     | String     | Name of the group

## Weebly.updateGroup
Updates a given group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| groupId  | String     | Id of the group
| name     | String     | Group name
| memberIds| List       | group members
| pageIds  | List       | Group pages

## Weebly.deleteGroup
Deletes the given group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| groupId  | String     | Id of the group

## Weebly.listSitePages
​Returns page_id, title, page_order, page_url, parent_id, and layout for an array of pages for a site. 

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| query        | String     | Use this parameter to retrieve only groups that have a full text search match based on the query string.
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortby       | Select     | Field name to sort by. Sortable fields: page_id, title, layout.
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.getSinglePage
Returns all fields for a given page.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| pageId   | String     | Id of the page

## Weebly.updatePage
Can update the title for a page.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| pageId   | String     | Id of the page
| title    | String     | Title of the page

## Weebly.listPlans
Returns all available plans for a Weebly Cloud account.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret

## Weebly.getSinglePlan
Returns all available plans for a Weebly Cloud account.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| planId   | String     | Id of the plan

## Weebly.getSitePlan
Get the plan assigned to a given site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.assignSitePlan
Assign a plan to a given site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| planId   | String     | Id of the plan
| term     | Number     | If no term is provided a monthly term (ex. term=1) is used as the default. 

## Weebly.getSingleSite
Retrieves site details for the given USER_ID and SITE_ID combination.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.listUserSites
Retrieves all the sites for a given user.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| page     | Number     | Which page of results to return. Starts at 1.
| limit    | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.
| role     | Select     | Use this parameter to only return sites that the current user has certain access rights to. If set to owner, only sites that user owns are returned. If set to contributor, only sites the user contributes to but does not own are returned.

## Weebly.createSite
Creates a new site for a given user. The domain must be unique. If optional parameters are not provided, then defaults defined at the Weebly Cloud account level will be used. Optionally a site can be created by copying an existing site.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| userId          | String     | Id of the user
| domain          | String     | The FQDN of the site. 
| brandName       | String     | Your brand name. Displays in the footer of any free sites. 
| brandUrl        | String     | Full url to your website. The link in the footer of a published site will go to this site. 
| publishUpsellUrl| String     | Full url to your publish promotion. This url will be loaded in an iframe (640px W by 200px H) upon site publish and can be used to advertise other services.
| upgradeUrl      | String     | Full url to your upgrade manager. When a user is editing a site they may be prompted to upgrade their account to take advantage of more features. 
| planId          | String     | Site plan id
| term            | Number     | Site plan term
| timeZone        | String     | Timezone used on the site. Available here - http://cloud-developer.weebly.com/uploads/3/0/3/1/30316827/timezones.json
| timeFormat      | Select     | Format used for time on the site. Values are 12 and 24.
| dateFormat      | Select     | Format used for dates on the site. Values are n/j/Y for month/day/year and j/n/Y for day/month/year.
| siteTitle       | String     | Site title
| sourceUserId    | String     | User id of the source site
| sourceSiteId    | String     | Site id of the source site

## Weebly.partUpdateSite
Updates the provided properties of a given user's site. The domain must be unique.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| userId          | String     | Id of the user
| siteId          | String     | Id of the site
| domain          | String     | The FQDN of the site. 
| brandName       | String     | Your brand name. Displays in the footer of any free sites. 
| brandUrl        | String     | Full url to your website. The link in the footer of a published site will go to this site. 
| publishUpsellUrl| String     | Full url to your publish promotion. This url will be loaded in an iframe (640px W by 200px H) upon site publish and can be used to advertise other services.
| upgradeUrl      | String     | Full url to your upgrade manager. When a user is editing a site they may be prompted to upgrade their account to take advantage of more features. 
| timeZone        | String     | Timezone used on the site. Available here - http://cloud-developer.weebly.com/uploads/3/0/3/1/30316827/timezones.json
| timeFormat      | Select     | Format used for time on the site. Values are 12 and 24.
| dateFormat      | Select     | Format used for dates on the site. Values are n/j/Y for month/day/year and j/n/Y for day/month/year.
| siteTitle       | String     | Site title

## Weebly.fullUpdateSite
Replaces the entire given site. The domain must be unique. 

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| userId          | String     | Id of the user
| siteId          | String     | Id of the site
| domain          | String     | The FQDN of the site. 
| brandName       | String     | Your brand name. Displays in the footer of any free sites. 
| brandUrl        | String     | Full url to your website. The link in the footer of a published site will go to this site. 
| publishUpsellUrl| String     | Full url to your publish promotion. This url will be loaded in an iframe (640px W by 200px H) upon site publish and can be used to advertise other services.
| upgradeUrl      | String     | Full url to your upgrade manager. When a user is editing a site they may be prompted to upgrade their account to take advantage of more features. 
| allowSsl        | Select     | Whether or not the SSL option has been enabled for this site.
| timeZone        | String     | Timezone used on the site. Available here - http://cloud-developer.weebly.com/uploads/3/0/3/1/30316827/timezones.json
| timeFormat      | Select     | Format used for time on the site. Values are 12 and 24.
| dateFormat      | Select     | Format used for dates on the site. Values are n/j/Y for month/day/year and j/n/Y for day/month/year.
| siteTitle       | String     | Site title

## Weebly.publishSite
Publishes a given site for a given user.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.unpublishSite
Unpublishes a given site for a given user.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.generateLoginLink
Generates a one-time link that will direct users to the site specified. This method requires that the account is enabled.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.setPublishCredentials
Sets publish credentials for a given site. If a user's site will not be hosted by Weebly, publish credentials can be provided.  When these values are set, the site will be published to the location specified.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key
| apiSecret      | credentials| Your API secret
| userId         | String     | Id of the user
| siteId         | String     | Id of the site
| publishHost    | String     | The hostname of the remote host that hosts the published site.
| publishUsername| String     | The username used to authenticate
| publishPassword| String     | The password used to authenticate
| publishPath    | String     | The absolute path of the remote host that hosts published site.

## Weebly.restoreSite
When a site is restored the owner of the site is granted access to it in the exact state it was when it was deleted, including the Weebly plan assigned. Restoring a site does not issue an automatic publish

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| domain   | String     | Domain of the site

## Weebly.disableSite
Suspends access to the given user's site in the editor by setting the suspended parameter to true. If a user attempts to access the site in the editor, an error is thrown.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.enableSite
Re-enables a suspended site by setting the suspended parameter to false. Users can access the editor for the site. Sites are enabled by default when created.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.deleteSite
Deletes the Weebly site. The site will no longer show up to the user.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.getSiteStore
Returns all fields for the site's store.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.updateSiteStore
Returns all fields for the site's store.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key
| apiSecret  | credentials| Your API secret
| userId     | String     | Id of the user
| siteId     | String     | Id of the site
| companyName| String     | The store's company name.
| street     | String     | The store's street address
| city       | String     | The store's city
| state      | String     | The store's state
| postalCode | String     | The store's postal code
| email      | String     | The store's email
| phone      | String     | The store's phone

## Weebly.listStoreCategories
Returns all categories in a store

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| page     | Number     | Which page of results to return. Starts at 1.
| limit    | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.
| filterby | String     | Field name to set a filter on.
| filterfor| String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743

## Weebly.countStoreCategories
Returns the number of categories for the given site, unless filtered or limited by search parameters.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| filterby | String     | Field name to set a filter on.
| filterfor| String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743

## Weebly.createStoreCategory
Creates a category.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| apiSecret         | credentials| Your API secret
| userId            | String     | Id of the user
| siteId            | String     | Id of the site
| name              | String     | The name of the store category.
| seoPageTitle      | String     | The meta tag title of the page embedded for search engines.
| seoPageDescription| String     | The meta tag description of the page embedded for search engines.
| productIds        | List       | An array of product sku ids within the store category.
| parentCategoryId  | String     | The category id of the parent, if the category is a sub-category.

## Weebly.getSingleCategory
Returns all fields for the given category

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category

## Weebly.updateCategory
Updates a category.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| apiSecret         | credentials| Your API secret
| userId            | String     | Id of the user
| siteId            | String     | Id of the site
| categoryId        | String     | Id of the category
| name              | String     | The name of the store category.
| seoPageTitle      | String     | The meta tag title of the page embedded for search engines.
| seoPageDescription| String     | The meta tag description of the page embedded for search engines.
| productIds        | List       | An array of product sku ids within the store category.
| parentCategoryId  | String     | The category id of the parent, if the category is a sub-category.

## Weebly.replaceCategory
Replaces a category.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| apiSecret         | credentials| Your API secret
| userId            | String     | Id of the user
| siteId            | String     | Id of the site
| categoryId        | String     | Id of the category
| name              | String     | The name of the store category.
| seoPageTitle      | String     | The meta tag title of the page embedded for search engines.
| seoPageDescription| String     | The meta tag description of the page embedded for search engines.
| productIds        | List       | An array of product sku ids within the store category.
| parentCategoryId  | String     | The category id of the parent, if the category is a sub-category.

## Weebly.deleteCategory
Deletes the category.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category

## Weebly.listCategoryImages
Returns an array of images and all their fields for the category.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category

## Weebly.countCategoryImages
Returns the number of images for a category.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category

## Weebly.createCategoryImage
Returns the number of images for a category.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category
| imageUrl  | String     | The URL to the product's image file. This is used in requests and the URL is returned in response.

## Weebly.getSingleCategoryImage
Returns all fields for a given category image.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category
| imageId   | String     | Id of the image

## Weebly.deleteCategoryImage
Deletes the category image.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| categoryId| String     | Id of the category
| imageId   | String     | Id of the image

## Weebly.listStoreCoupons
Returns all coupons in a store

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| page     | Number     | Which page of results to return. Starts at 1.
| limit    | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.
| filterby | String     | Field name to set a filter on.
| filterfor| String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743

## Weebly.countStoreCoupons
Returns the number of coupons for a store.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.getSingleStoreCoupon
Returns all fields for a given coupon.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| couponId | String     | Id of the coupon

## Weebly.updateStoreCoupon
Updates a coupon.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key
| apiSecret      | credentials| Your API secret
| userId         | String     | Id of the user
| siteId         | String     | Id of the site
| couponId       | String     | Id of the coupon
| code           | String     | The coupon code the user enters.
| type           | Select     | The type of coupon. Use the following: percent: percentage discount absolute: an absolute amount discount shipping: free shipping
| amount         | String     | The amount of the coupon, for example 5.00 for an absolute amount of $5.00. For percent types, enter a percentage amount, for example 20.00 for 20%.
| criteria       | Select     | The limiting criteria for applying a coupon. One of the following: all: no limitations, total_over: only orders over X dollar amount, categories: only orders containing products from specific categories, products: only orders containing specific products
| criteriaAmount | String     | The amount
| productIds     | List       | An array of product sku ids
| categoryIds    | List       | An array of category ids
| shippingRateIds| List       | An array of shipping rate ids

## Weebly.createStoreCoupon
Creates a coupon.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key
| apiSecret      | credentials| Your API secret
| userId         | String     | Id of the user
| siteId         | String     | Id of the site
| code           | String     | The coupon code the user enters.
| type           | Select     | The type of coupon. Use the following: percent: percentage discount absolute: an absolute amount discount shipping: free shipping
| amount         | String     | The amount of the coupon, for example 5.00 for an absolute amount of $5.00. For percent types, enter a percentage amount, for example 20.00 for 20%.
| criteria       | Select     | The limiting criteria for applying a coupon. One of the following: all: no limitations, total_over: only orders over X dollar amount, categories: only orders containing products from specific categories, products: only orders containing specific products
| criteriaAmount | String     | The amount
| productIds     | List       | An array of product sku ids
| categoryIds    | List       | An array of category ids
| shippingRateIds| List       | An array of shipping rate ids

## Weebly.replaceStoreCoupon
Replaces a coupon.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key
| apiSecret      | credentials| Your API secret
| userId         | String     | Id of the user
| siteId         | String     | Id of the site
| couponId       | String     | Id of the coupon
| code           | String     | The coupon code the user enters.
| type           | Select     | The type of coupon. Use the following: percent: percentage discount absolute: an absolute amount discount shipping: free shipping
| amount         | String     | The amount of the coupon, for example 5.00 for an absolute amount of $5.00. For percent types, enter a percentage amount, for example 20.00 for 20%.
| criteria       | Select     | The limiting criteria for applying a coupon. One of the following: all: no limitations, total_over: only orders over X dollar amount, categories: only orders containing products from specific categories, products: only orders containing specific products
| criteriaAmount | String     | The amount
| productIds     | List       | An array of product sku ids
| categoryIds    | List       | An array of category ids
| shippingRateIds| List       | An array of shipping rate ids

## Weebly.deleteStoreCoupon
Deletes coupon.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| couponId | String     | Id of the coupon

## Weebly.listStoreOrders
​Returns an array of orders for the store

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| query        | String     | Use this parameter to retrieve only forms that have a full text search match
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortby       | Select     | Field name to sort on.
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.countStoreOrders
​Returns the number of orders for a store

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.getSingleOrder
​Returns all fields for a given order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.listOrderInvoices
Returns an array of invoices for an order

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.countOrderInvoices
Returns the number of invoices for an order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.getSingleOrderInvoice
Returns an invoice for a given order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order
| invoiceId| String     | Id of the invoice

## Weebly.listInvoiceTransactions
Returns an array of transactions for an invoice

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order
| invoiceId| String     | Id of the invoice

## Weebly.countInvoiceTransactions
Returns the number of transactions for an invoice.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order
| invoiceId| String     | Id of the invoice

## Weebly.getSingleInvoiceTransaction
Returns a transaction for a given invoice.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| orderId      | String     | Id of the order
| invoiceId    | String     | Id of the invoice
| transactionId| String     | Id of the transaction

## Weebly.listOrderItems
Returns an array of items for an order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.countOrderItems
Returns the number of order items for an order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.getSingleOrderItem
Returns all order items for a given order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order
| itemId   | String     | Id of the item

## Weebly.listOrderShipments
Returns an array of shipments for an order

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.countOrderShipments
Returns the number of shipments for an order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| orderId  | String     | Id of the order

## Weebly.getSingleOrderShipment
Returns a given shipment for an order.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| orderId   | String     | Id of the order
| shipmentId| String     | Id of the shipment

## Weebly.fullUpdateOrderShipment
​Updates the given fields of an order shipment, replacing any other fields with default values. If the tracking number or status are updated, a new Order Shipment Transaction is created and the status is updated to shipped.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| userId          | String     | Id of the user
| siteId          | String     | Id of the site
| orderId         | String     | Id of the order
| shipmentId      | String     | Id of the shipment
| businessName    | String     | Business name of the shipping addressee, if applicable
| fullName        | String     | Business name of the shipping addressee, if applicable
| street          | String     | Street address of the shipping addressee
| city            | String     | City of the shipping addressee
| region          | String     | Region of the shipping addressee
| country         | String     | Country of the shipping addressee
| postalCode      | String     | Postal code of the shipping addressee
| email           | String     | Email of the shipping addressee
| phone           | String     | Phone of the shipping addressee
| title           | String     | Title of the shipping addressee
| weight          | String     | Weight of the shipment package
| weightUnit      | Select     | The weight unit used for this order (kg or lb). If not set, defaults to the store's weight unit.
| height          | String     | Height of the shipment package
| width           | String     | Width of the shipment package
| depth           | String     | Depth of the shipment package
| shippingProvider| String     | Company providing the shipping
| trackingNumber  | String     | Tracking number for the shipment
| status          | Select     | Status of the shipment, either label_created, label_returned, shipped

## Weebly.partUpdateOrderShipment
Updates the given fields of an order shipment. If the tracking number or status are updated, a new Order Shipment Transaction is created and the status is updated to shipped.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| userId          | String     | Id of the user
| siteId          | String     | Id of the site
| orderId         | String     | Id of the order
| shipmentId      | String     | Id of the shipment
| businessName    | String     | Business name of the shipping addressee, if applicable
| fullName        | String     | Business name of the shipping addressee, if applicable
| street          | String     | Street address of the shipping addressee
| city            | String     | City of the shipping addressee
| region          | String     | Region of the shipping addressee
| country         | String     | Country of the shipping addressee
| postalCode      | String     | Postal code of the shipping addressee
| email           | String     | Email of the shipping addressee
| phone           | String     | Phone of the shipping addressee
| title           | String     | Title of the shipping addressee
| weight          | String     | Weight of the shipment package
| weightUnit      | Select     | The weight unit used for this order (kg or lb). If not set, defaults to the store's weight unit.
| height          | String     | Height of the shipment package
| width           | String     | Width of the shipment package
| depth           | String     | Depth of the shipment package
| shippingProvider| String     | Company providing the shipping
| trackingNumber  | String     | Tracking number for the shipment
| status          | Select     | Status of the shipment, either label_created, label_returned, shipped

## Weebly.listOrderShipmentTransactions
Returns an array of transactions for a shipment

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| orderId   | String     | Id of the order
| shipmentId| String     | Id of the shipment

## Weebly.countOrderShipmentTransactions
Returns the number of transactions for a shipment.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| apiSecret | credentials| Your API secret
| userId    | String     | Id of the user
| siteId    | String     | Id of the site
| orderId   | String     | Id of the order
| shipmentId| String     | Id of the shipment

## Weebly.getSingleOrderShipmentTransaction
Returns a given transaction for a shipment.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| orderId      | String     | Id of the order
| shipmentId   | String     | Id of the shipment
| transactionId| String     | Id of the transaction

## Weebly.listStoreProducts
​Returns an array of products for the store

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| apiSecret    | credentials| Your API secret
| userId       | String     | Id of the user
| siteId       | String     | Id of the site
| query        | String     | Use this parameter to retrieve only forms that have a full text search match
| filterby     | String     | Field name to set a filter on.
| filterfor    | String     | Specify a range by including a comparison operator at the front of the string.Ex: >1454370743
| sortby       | String     | Field name to sort on.
| sortDirection| Select     | Use asc for ascending sort or desc for descending sort.
| page         | Number     | Which page of results to return. Starts at 1.
| limit        | Number     | Number of results per page. Default 25, Max 200. Don't forget that raising the limit may affect performance.

## Weebly.countStoreProducts
Returns the number of products for the store

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site

## Weebly.createProduct
Creates a new product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| name     | String     | The name of the product
| skus     | List       | A list of all the product skus for this product

## Weebly.getSingleProduct
Returns all fields for a given product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.updateProduct
Updates a product.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| apiSecret       | credentials| Your API secret
| userId          | String     | Id of the user
| siteId          | String     | Id of the site
| productId       | String     | Id of the product
| name            | String     | Name of the product
| shortDescription| String     | The description of the product
| published       | Select     | True if the product is published and live on the site

## Weebly.replaceProduct
Replaces a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| name     | String     | Name of the product
| skus     | List       | A list of all the product skus for this product

## Weebly.deleteProduct
Deletes the given product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.listProductImages
Returns all fields for each image in an array of images for the product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.countProductImages
Returns the number of images for a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.createProductImage
Creates a product image.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| imageUrl | String     | The URL to the product's image file. This is used in requests and the URL is returned in response.

## Weebly.getSingleProductImage
Returns all fields for a given image.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| imageId  | String     | Id of the image

## Weebly.deleteProductImage
Deletes a product image.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| imageId  | String     | Id of the image

## Weebly.listProductOptions
Gets an array of options for a product. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.countProductOptions
Returns the number of options for a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.getSingleProductOption
Returns all fields for a given option.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| optionId | String     | Id of the option

## Weebly.updateProductOption
Updates the given product option.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Your API key
| apiSecret          | credentials| Your API secret
| userId             | String     | Id of the user
| siteId             | String     | Id of the site
| productId          | String     | Id of the product
| optionId           | String     | Id of the option
| ownerId            | String     | Id of the owner
| siteId             | String     | Id of the site
| siteProductId      | String     | Id of the site product
| siteProductOptionId| String     | Id of the site product option
| choiceOrder        | String     | The various choices for this option name, in order.

## Weebly.listProductSkus
Returns all fields for all SKUs for a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.countProductSkus
Returns the number of SKUs for a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product

## Weebly.getSingleProductSku
Returns all fields for a given SKU.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| skuId    | String     | Id of the sku

## Weebly.updateProductSku
Updates a product SKU

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| skuId    | String     | Id of the sku
| price    | String     | The price of this SKU
| salePrice| String     | The sale price of this SKU
| inventory| String     | The inventory of this SKU
| sku      | String     | A user facing SKU identifier
| weight   | String     | The weight of this SKU

## Weebly.listProductSkuOptions
Returns all fields for an array of option choices for a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| skuId    | String     | Id of the sku

## Weebly.countProductSkuOptions
Returns the number of option choices for a product.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| skuId    | String     | Id of the sku

## Weebly.getSingleProductSkuOption
Returns all fields for an option choice.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| productId| String     | Id of the product
| skuId    | String     | Id of the sku
| optionId | String     | Id of the option

## Weebly.listSubaccounts
Returns all subreseller accounts for the given reseller account. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret

## Weebly.getSingleSubaccount
Returns the given subreseller's account.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| subaccountId| String     | Id of the subreseller

## Weebly.createCubaccount
Creates a subreseller.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| apiSecret         | credentials| Your API secret
| brandName         | String     | The brand name of the subreseller. Displays in the footer of any free sites.
| brandUrl          | String     | Full url to the subreseller's website. The link in the footer of a published site will go to this site. 
| adminName         | String     | User that is an admin for this subreseller and will have access to the Cloud Admin for that subreseller.
| adminEmail        | String     | Email for the admin. Weebly Cloud uses the email as the username for logging into the Cloud Admin. 
| portalDomain      | String     | Admin (eg: portaldomain.com/admin) and the client portal, if enabled (eg: portaldomain.com/portal). This is also the domain the end user will see when in the Weebly editor (eg: portaldomain.com/editor)
| testMode          | Select     | Whether or not this subreseller account is in test mode. By default, this is set to true when a subreseller is created. 
| ecommerce         | Select     | Whether or not this subreseller's sites support ecommerce. 
| manualSiteCreation| Select     | Whether or not this subreseller can create sites using the Cloud Admin.
| publishSettings   | Select     |  How this subreseller's sites are hosted and published. Valid values are weebly or ftp.
| availablePlans    | List       | The Weebly plans this subreseller will provide. Valid values are Free - "0", Starter - "5", Pro - "10" and Business - "15".

## Weebly.createSubaccountKey
Creates an encrypted API Key for the subreseller.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| subaccountId| String     | Id of the subreseller

## Weebly.updateSubacoount
Updates the provided subreseller account fields for a given account. 

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| subaccountId| String     | Id of the subreseller
| brandName   | String     | The brand name of the subreseller. Displays in the footer of any free sites.
| brandUrl    | String     | Full url to the subreseller's website. The link in the footer of a published site will go to this site. 
| portalDomain| String     | Admin (eg: portaldomain.com/admin) and the client portal, if enabled (eg: portaldomain.com/portal). This is also the domain the end user will see when in the Weebly editor (eg: portaldomain.com/editor)
| suspended   | Select     | Whether or not this subreseller account is suspended

## Weebly.listTeamMembers
Returns all team members (Cloud Admin users) for this account. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret

## Weebly.getSingleTeamMember
Returns the given team member.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| teamMemberId| String     | Id of the team member

## Weebly.createTeamMemberLoginLink
Generates a one-time use link to log a team member into the Cloud Admin.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| teamMemberId| String     | Id of the team member

## Weebly.listCloudThemes
Lists all custom Cloud themes you've created.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret

## Weebly.createCloudtheme
Adds a new custom Cloud theme to your repository. 

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| themeName   | String     | Name given to a theme
| themeZipLink| String     | Publicly accessible url that points to the zip file containing the theme contents

## Weebly.updateCloudTheme
Updates a given theme.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| themeId  | String     | Id of the theme
| themeName| String     | Name given to a theme

## Weebly.deleteCloudTheme
Deletes a given theme.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| themeId  | String     | Id of the theme

## Weebly.listUserThemes
Creates a new theme in the user account.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user

## Weebly.createUserTheme
Lists all themes available to the given user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| apiSecret   | credentials| Your API secret
| userId      | String     | Id of the user
| themeName   | String     | Name given to a theme
| themeZipLink| String     | Publicly accessible url that points to the zip file containing the theme contents

## Weebly.setSiteTheme
Sets the theme for a given site. This theme change takes place immediately, but won't be seen on the published site until next publish. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| siteId   | String     | Id of the site
| themeId  | String     | Id of theme
| isCustom | Select     | Depicts whether the theme is a custom theme or not. Custom themes are added by a user or added via the Weebly Cloud API. 

## Weebly.getUserInfo
Returns the details for a given Weebly user associated with your Weebly Cloud account.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user

## Weebly.createUser
Creates a Weebly user in your Weebly Cloud account. The email address must be unique to all of Weebly or an error will be thrown. If your account is in test mode, all users created through the API will be flagged as test users.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| email    | String     | email of the user
| testMode | Select     | Denotes whether a user is a test user or not. 
| language | Select     | A two letter language code to set the user's default language. The supported languages with their two character codes: Danish - da  German - de English - en Spanish - es French - fr Italian - it Japanese - ja Dutch - nl Norwegian - no Polish - pl Portuguese - pt Russian - ru Swedish - sv Turkish - tr Chinese (simplified) - zh

## Weebly.fullUpdateUser
Updates an existing Weebly user in your Weebly Cloud account. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| email    | String     | email of the user
| testMode | Select     | Denotes whether a user is a test user or not. 
| language | Select     | A two letter language code to set the user's default language. The supported languages with their two character codes: Danish - da  German - de English - en Spanish - es French - fr Italian - it Japanese - ja Dutch - nl Norwegian - no Polish - pl Portuguese - pt Russian - ru Swedish - sv Turkish - tr Chinese (simplified) - zh

## Weebly.partUpdateUser
Updates the provided fields of an existing Weebly user in your Weebly Cloud account. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user
| email    | String     | email of the user
| testMode | Select     | Denotes whether a user is a test user or not. 
| language | Select     | A two letter language code to set the user's default language. The supported languages with their two character codes: Danish - da  German - de English - en Spanish - es French - fr Italian - it Japanese - ja Dutch - nl Norwegian - no Polish - pl Portuguese - pt Russian - ru Swedish - sv Turkish - tr Chinese (simplified) - zh

## Weebly.enableUser
Enables a user account after an account has been disabled. Enabling a user account will allow users to log into the editor. When a user is created, their account is automatically enabled.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user

## Weebly.disableUser
Disables a user account. When a user account is disabled, the user will no longer be able to log into the editor. If an attempt to create a login link is made on a disabled account, an error is thrown.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user

## Weebly.createUserLoginLink
Generates a one-time link that will direct users to the editor for the last site that was modified in the account. This method requires that the account is enabled and that the account has at least one site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| userId   | String     | Id of the user

