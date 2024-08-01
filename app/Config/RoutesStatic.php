<?php
/*
 * --------------------------------------------------------------------
 * GET
 * --------------------------------------------------------------------
 */
$routes->get('cron/update-sitemap', 'HomeController::cronUpdateSitemap');
$routes->get('unsubscribe', 'HomeController::unSubscribe');
$routes->get('connect-with-facebook', 'AuthController::connectWithFacebook');
$routes->get('facebook-callback', 'AuthController::facebookCallback');
$routes->get('connect-with-google', 'AuthController::connectWithGoogle');
$routes->get('connect-with-vk', 'AuthController::connectWithVk');



/*
 * --------------------------------------------------------------------
 * POST
 * --------------------------------------------------------------------
 */

 $routes->post('contact-post', 'Web\Page::contactPost');

// auth
$routes->post('login-post', 'Web\Auth::loginPost');
$routes->post('logout', 'Web\Auth::logout');
$routes->post('forgot-password-post', 'Web\AuthController::forgotPasswordPost');
$routes->post('reset-password-post', 'Web\AuthController::resetPasswordPost');
$routes->post('register-post', 'Web\Auth::registerPost');












$postArray = [
    //Admin
    'Admin/setThemePost',
    // 'Admin/editSliderSettingsPost',
    // 'Admin/deleteAbuseReportPost',
    // 'Admin/adSpacesPost',
    // 'Admin/googleAdsenseCodePost',
    // 'Admin/cacheSystemPost',
    // 'Admin/deleteContactMessagePost',
    // 'Admin/navigationPost',
    // 'Admin/generateSitemapPost',
    // 'Admin/downloadSitemapPost',
    // 'Admin/deleteSitemapPost',
    // 'Admin/seoToolsPost',
    // 'Admin/storagePost',
    // 'Admin/awsS3Post',
    // 'Admin/addCurrencyPost',
    // 'Admin/currencySettingsPost',
    // 'Admin/currencyConverterPost',
    // 'Admin/updateCurrencyRates',
    // 'Admin/deleteCurrencyPost',
    // 'Admin/editCurrencyPost',
    // 'Admin/editFontPost',
    // 'Admin/setSiteFontPost',
    // 'Admin/addFontPost',
    // 'Admin/deleteFontPost',
    // 'Admin/editIndexBannerPost',
    // 'Admin/homepageManagerPost',
    // 'Admin/deleteIndexBannerPost',
    // 'Admin/homepageManagerSettingsPost',
    // 'Admin/addIndexBannerPost',
    // 'Admin/setActiveLanguagePost',
    // 'Admin/downloadDatabaseBackup',
    // 'Admin/addCityPost',
    // 'Admin/addCountryPost',
    // 'Admin/addStatePost',
    // 'Admin/deleteCityPost',
    // 'Admin/deleteCountryPost',
    // 'Admin/editCityPost',
    // 'Admin/editCountryPost',
    // 'Admin/editStatePost',
    // 'Admin/deleteStatePost',
    // 'Admin/newsletterSendEmail',
    // 'Admin/deleteNewsletterPost',
    // 'Admin/newsletterSettingsPost',
    // 'Admin/newsletterSendEmailPost',
    // 'Admin/addPagePost',
    // 'Admin/editPagePost',
    // 'Admin/deletePagePost',
    // 'Admin/emailSettingsPost',
    // 'Admin/sendTestEmailPost',
    // 'Admin/emailOptionsPost',
    // 'Admin/generalSettingsPost',
    // 'Admin/recaptchaSettingsPost',
    // 'Admin/maintenanceModePost',
    // 'Admin/paymentGatewaySettingsPost',
    // 'Admin/commissionSettingsPost',
    // 'Admin/deleteGlobalTaxPost',
    // 'Admin/editGlobalTaxPost',
    // 'Admin/addGlobalTaxPost',
    // 'Admin/preferencesPost',
    // 'Admin/productSettingsPost',
    // 'Admin/routeSettingsPost',
    // 'Admin/socialLoginSettingsPost',
    // 'Admin/visualSettingsPost',
    // 'Admin/updateWatermarkSettingsPost',
    // 'Admin/editSliderItemPost',
    // 'Admin/addSliderItemPost',
    // 'Admin/deleteSliderItemPost',
    // 'Admin/activateInactivateCountries',
    // 'Admin/homepageManagerPost',
    // 'Admin/updateCurrencyRate',
    // //Ajax
    // 'Ajax/getStates',
    // 'Ajax/getCities',
    // 'Ajax/getSubCategories',
    // 'Ajax/searchCategories',
    // 'Ajax/getSubCategories',
    // 'Ajax/runEmailQueue',
    // 'Ajax/getBlogCategoriesByLang',
    // 'Ajax/getCountriesByContinent',
    // 'Ajax/getStatesByCountry',
    // 'Ajax/addComment',
    // 'Ajax/loadMoreComments',
    // 'Ajax/deleteComment',
    // 'Ajax/loadSubCommentForm',
    // 'Ajax/addBlogComment',
    // 'Ajax/loadMoreBlogComments',
    // 'Ajax/deleteBlogComment',
    // 'Ajax/addChatPost',
    // 'Ajax/loadChatPost',
    // 'Ajax/sendMessagePost',
    // 'Ajax/deleteChatPost',
    // 'Ajax/searchLocation',
    // 'Ajax/setDefaultLocation',
    // 'Ajax/reportAbusePost',
    // 'Ajax/ajaxSearch',
    // 'Ajax/loadMorePromotedProducts',
    // 'Ajax/hideCookiesWarning',
    // 'Ajax/getProductShippingCost',
    // 'Ajax/addToNewsletter',
    // //Auth
    // 'Auth/sendActivationEmailPost',
    // //Blog
    // 'Blog/addPostPost',
    // 'Blog/addCategoryPost',
    // 'Blog/deleteCategoryPost',
    // 'Blog/approveCommentPost',
    // 'Blog/deleteComment',
    // 'Blog/editCategoryPost',
    // 'Blog/editPostPost',
    // 'Blog/deletePostPost',
    // 'Blog/approveSelectedComments',
    // 'Blog/deleteSelectedComments',
    // 'Blog/deletePostImagePost',
    // Hosting
    // 'Hosting/addPostPost',
    'Hosting/addCategoryPost',
    // 'Hosting/deleteCategoryPost',
    // 'Hosting/approveCommentPost',
    // 'Hosting/deleteComment',
    // 'Hosting/editCategoryPost',
    // 'Hosting/editPostPost',
    // 'Hosting/deletePostPost',
    // 'Hosting/approveSelectedComments',
    // 'Hosting/deleteSelectedComments',
    // 'Hosting/deletePostImagePost',
    // //Cart
    // 'Cart/removeCartDiscountCoupon',
    // 'Cart/removeFromCart',
    // 'Cart/getShippingMethodsByLocation',
    // //Category
    // 'Category/deleteBrandPost',
    // 'Category/editBrandPost',
    // 'Category/brandSettingsPost',
    // 'Category/addBrandPost',
    // 'Category/addCategoryPost',
    // 'Category/addCustomFieldPost',
    // 'Category/downloadCsvFilesPost',
    // 'Category/generateCsvObjectPost',
    // 'Category/importCsvItemPost',
    // 'Category/categorySettingsPost',
    // 'Category/deleteCategoryPost',
    // 'Category/loadCategories',
    // 'Category/editCustomFieldOptionPost',
    // 'Category/addCustomFieldOptionPost',
    // 'Category/addCategoryToCustomField',
    // 'Category/customFieldSettingsPost',
    // 'Category/addRemoveCustomFieldFiltersPost',
    // 'Category/deleteCustomFieldPost',
    // 'Category/editCategoryPost',
    // 'Category/editCustomFieldPost',
    // 'Category/deleteCustomFieldOption',
    // 'Category/deleteCategoryFromField',
    // 'Category/editFeaturedCategoriesOrderPost',
    // 'Category/editIndexCategoriesOrderPost',
    // 'Category/deleteCategoryImagePost',
    // //Dashboard
    // 'Dashboard/deleteCouponPost',
    // 'Dashboard/downloadCsvFilePost',
    // 'Dashboard/generateCsvObjectPost',
    // 'Dashboard/importCsvItemPost',
    // 'Dashboard/deleteProduct',
    // 'Dashboard/approveDeclineRefund',
    // 'Dashboard/deleteShippingLocationPost',
    // 'Dashboard/selectShippingMethod',
    // 'Dashboard/deleteShippingMethodPost',
    // 'Dashboard/deleteShippingZonePost',
    // 'Dashboard/deleteShippingClassPost',
    // 'Dashboard/deleteShippingDeliveryTimePost',
    // 'Dashboard/addLicenseKeys',
    // 'Dashboard/deleteLicenseKey',
    // 'Dashboard/loadLicenseKeysList',
    // 'Dashboard/getSubCategories',
    // //Earnings
    // 'Earnings/addPayoutPost',
    // 'Earnings/deleteEarningPost',
    // 'Earnings/completePayoutRequestPost',
    // 'Earnings/deletePayoutPost',
    // 'Earnings/payoutSettingsPost',
    // 'Earnings/editSellerBalancePost',
    // //File
    // 'File/uploadBlogImage',
    // 'File/downloadDigitalFile',
    // 'File/setImageMainSession',
    // 'File/setImageMain',
    // 'File/deleteImageSession',
    // 'File/deleteImage',
    // 'File/deleteVideo',
    // 'File/deleteAudio',
    // 'File/deleteDigitalFile',
    // 'File/getBlogImages',
    // 'File/deleteBlogImage',
    // 'File/loadMoreBlogImages',
    // 'File/getFileManagerImages',
    // 'File/deleteFileManagerImage',
    // //Language
    'Language/editLanguagePost',
    'Language/setDefaultLanguagePost',
    'Language/exportLanguagePost',
    'Language/deleteLanguagePost',
    'Language/addLanguagePost',
    'Language/importLanguagePost',
    'Language/editTranslationsPost',
    // //Membership
    // 'Membership/addRolePost',
    // 'Membership/addUserPost',
    // 'Membership/editPlanPost',
    // 'Membership/editRolePost',
    // 'Membership/editUserPost',
    // 'Membership/addPlanPost',
    // 'Membership/settingsPost',
    // 'Membership/deletePlanPost',
    // 'Membership/deleteRolePost',
    // 'Membership/approveShopOpeningRequest',
    // 'Membership/approvePaymentPost',
    // 'Membership/deleteTransactionPost',
    // 'Membership/deleteUserPost',
    // 'Membership/assignMembershipPlanPost',
    // 'Membership/changeUserRolePost',
    // 'Membership/confirmUserEmail',
    // 'Membership/banRemoveBanUser',
    // //OrderAdmin
    // 'OrderAdmin/bankTransferOptionsPost',
    // 'OrderAdmin/deleteBankTransferPost',
    // 'OrderAdmin/deleteDigitalSalePost',
    // 'OrderAdmin/approveGuestOrderProduct',
    // 'OrderAdmin/deleteOrderProductPost',
    // 'OrderAdmin/updateOrderProductStatusPost',
    // 'OrderAdmin/orderPaymentReceivedPost',
    // 'OrderAdmin/deleteOrderPost',
    // 'OrderAdmin/deleteTransactionPost',
    // 'OrderAdmin/approveRefundPost',
    // //Order
    // 'Order/deleteQuoteRequest',
    // 'Order/addRefundMessage',
    // 'Order/cancelOrderPost',
    // 'Order/approveOrderProductPost',
    // 'Order/cancelOrderPost',
    // 'Order/deleteQuoteRequest',
    // //Product
    // 'Product/deleteReviewPost',
    // 'Product/deleteCommentPost',
    // 'Product/deleteQuoteRequestPost',
    // 'Product/approveCommentPost',
    // 'Product/deleteCommentPost',
    // 'Product/deleteProductPermanently',
    // 'Product/deleteProduct',
    // 'Product/featuredProductsPricingPost',
    // 'Product/deleteFeaturedTransactionPost',
    // 'Product/addRemoveFeaturedProduct',
    // 'Product/rejectProduct',
    // 'Product/approveProduct',
    // 'Product/deleteSelectedProducts',
    // 'Product/deleteSelectedProductsPermanently',
    // 'Product/addRemoveSpecialOffer',
    // 'Product/restoreProduct',
    // 'Product/deleteSelectedReviews',
    // 'Product/approveSelectedComments',
    // 'Product/deleteSelectedComments',
    // //Profile
    // 'Profile/deleteCoverImagePost',
    // 'Profile/deleteShippingAddressPost',
    // //SupportAdmin
    // 'SupportAdmin/addCategoryPost',
    // 'SupportAdmin/addContentPost',
    // 'SupportAdmin/editCategoryPost',
    // 'SupportAdmin/editContentPost',
    // 'SupportAdmin/deleteContentPost',
    // 'SupportAdmin/deleteCategoryPost',
    // 'SupportAdmin/sendMessagePost',
    // 'SupportAdmin/deleteTicketPost',
    // 'SupportAdmin/changeTicketStatusPost',
    // 'SupportAdmin/getCategoriesByLang',
    // //Support
    // 'Support/downloadAttachmentPost',
    // 'Support/uploadSupportAttachment',
    // 'Support/deleteSupportAttachmentPost',
];

foreach ($postArray as $item) {
    $admin = "Admin\\";
    $array = explode('/', $item);
    // $routes->post($item, $array[0] . 'Controller::' . $array[1]);
    $routes->post($item, $admin . $array[0] . '::' . $array[1]);
}