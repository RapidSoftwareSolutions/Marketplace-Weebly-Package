<?php
$routes = [
    'metadata',
    'getAccount',
    'fullUpdateAccount',
    'partUpdateAccount',
    'listSiteBlogs',
    'getSingleBlog',
    'listBlogPosts',
    'getSinglePost',
    'createPost',
    'partPostUpdate',
    'fullPostUpdate',
    'deletePost',
    'listForms',
    'getSingleForm',
    'listFormEntries',
    'getSingleFormEntry',
    'listSiteMembers',
    'getSingleMember',
    'createMember',
    'updateMember',
    'deleteMember',
    'listSiteGroups',
    'getSingleGroup',
    'createGroup',
    'updateGroup',
    'deleteGroup',
    'listSitePages',
    'getSinglePage',
    'updatePage',
    'listPlans',
    'getSinglePlan',
    'getSitePlan',
    'assignSitePlan',
    'getSingleSite',
    'listUserSites',
    'createSite',
    'partUpdateSite',
    'fullUpdateSite',
    'publishSite',
    'unpublishSite',
    'generateLoginLink',
    'setPublishCredentials',
    'restoreSite',
    'disableSite',
    'enableSite',
    'deleteSite',
    'getSiteStore',
    'updateSiteStore',
    'listStoreCategories',
    'countStoreCategories',
    'createStoreCategory',
    'getSingleCategory',
    'updateCategory',
    'replaceCategory',
    'deleteCategory',
    'listCategoryImages',
    'countCategoryImages',
    'createCategoryImage',
    'getSingleCategoryImage',
    'deleteCategoryImage',
    'listStoreCoupons',
    'countStoreCoupons',
    'getSingleStoreCoupon',
    'updateStoreCoupon',
    'createStoreCoupon',
    'replaceStoreCoupon',
    'deleteStoreCoupon',
    'listStoreOrders',
    'countStoreOrders',
    'getSingleOrder',
    'listOrderInvoices',
    'countOrderInvoices',
    'getSingleOrderInvoice',
    'listInvoiceTransactions',
    'countInvoiceTransactions',
    'getSingleInvoiceTransaction',
    'listOrderItems',
    'countOrderItems',
    'getSingleOrderItem',
    'listOrderShipments',
    'countOrderShipments',
    'getSingleOrderShipment',
    'fullUpdateOrderShipment',
    'partUpdateOrderShipment',
    'listOrderShipmentTransactions',
    'countOrderShipmentTransactions',
    'getSingleOrderShipmentTransaction',
    'listStoreProducts',
    'countStoreProducts',
    'createProduct',
    'getSingleProduct',
    'updateProduct',
    'replaceProduct',
    'deleteProduct',
    'listProductImages',
    'countProductImages',
    'createProductImage',
    'getSingleProductImage',
    'deleteProductImage',
    'listProductOptions',
    'countProductOptions',
    'getSingleProductOption',
    'updateProductOption',
    'listProductSkus',
    'countProductSkus',
    'getSingleProductSku',
    'updateProductSku',
    'listProductSkuOptions',
    'countProductSkuOptions',
    'getSingleProductSkuOption',
    'listSubaccounts',
    'getSingleSubaccount',
    'createCubaccount',
    'createSubaccountKey',
    'updateSubacoount',
    'listTeamMembers',
    'getSingleTeamMember',
    'createTeamMemberLoginLink',
    'listCloudThemes',
    'createCloudtheme',
    'updateCloudTheme',
    'deleteCloudTheme',
    'listUserThemes',
    'createUserTheme',
    'setSiteTheme',
    'getUserInfo',
    'createUser',
    'fullUpdateUser',
    'partUpdateUser',
    'enableUser',
    'disableUser',
    'createUserLoginLink'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

