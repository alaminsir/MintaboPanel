<?php
namespace Config;

use CodeIgniter\Router\RouteCollection;
// use CodeIgniter\Router\Route;

$languages = Globals::$languages;
$generalSettings = Globals::$generalSettings;

$csrt = Globals::$customRoutes;
$rtAdmin = $csrt->admin;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Web\Home::index');

/*
 * --------------------------------------------------------------------
 * Static Routes
 * --------------------------------------------------------------------
 */

include_once 'RoutesStatic.php';



// $routes->get('/admin/login', 'Admin\Auth::index');

$routes->get('/market', 'Market\Home::index');
$routes->get('/panel', 'Panel\Dashboard::index');



/*
 * --------------------------------------------------------------------
 * Admin Routes
 * --------------------------------------------------------------------
 */
$routes->get($rtAdmin, 'Admin\Admin::index');
$routes->get($rtAdmin . '/home-dash', 'Admin\Admin::home_dash');
$routes->get($rtAdmin . '/ecom-dash', 'Admin\Admin::ecom_dash');
$routes->get($rtAdmin . '/domain-dash', 'Admin\Admin::domain_dash');
$routes->get($rtAdmin . '/hosting-dash', 'Admin\Admin::host_dash');
$routes->post($rtAdmin . '/login-post', 'Admin\Auth::loginPost');
$routes->get('confirm-account', 'AuthController::confirmAccount');
//navigation
$routes->get($rtAdmin . '/navigation', 'Admin\Admin::navigation');
$routes->get($rtAdmin . '/themes', 'Admin\Admin::themes');
$routes->get($rtAdmin . '/homepage-manager', 'Admin\Admin::homepageManager');
$routes->get($rtAdmin . '/edit-banner/(:num)', 'Admin\Admin::editIndexBanner/$1');
//slider
$routes->get($rtAdmin . '/slider', 'Admin\Admin::slider');
$routes->get($rtAdmin . '/edit-slider-item/(:num)', 'Admin\Admin::editSliderItem/$1');
//page
$routes->get($rtAdmin . '/add-page', 'Admin\Admin::addPage');
$routes->get($rtAdmin . '/edit-page/(:num)', 'Admin\Admin::editPage/$1');
$routes->get($rtAdmin . '/pages', 'Admin\Admin::pages');
//order
// $routes->get($rtAdmin . '/orders', 'OrderAdminController::orders');
// $routes->get($rtAdmin . '/order-details/(:num)', 'OrderAdminController::orderDetails/$1');
// $routes->get($rtAdmin . '/transactions', 'OrderAdminController::transactions');
// $routes->get($rtAdmin . '/order-bank-transfers', 'OrderAdminController::orderBankTransfers');
// $routes->get($rtAdmin . '/digital-sales', 'OrderAdminController::digitalSales');
//product
$routes->get($rtAdmin . '/products', 'ProductController::products');
$routes->get($rtAdmin . '/product-details/(:num)', 'ProductController::productDetails/$1');
$routes->get($rtAdmin . '/featured-products', 'ProductController::featuredProducts');
$routes->get($rtAdmin . '/featured-products-transactions', 'ProductController::featuredProductsTransactions');
$routes->get($rtAdmin . '/featured-products-pricing', 'ProductController::featuredProductsPricing');
//bidding
$routes->get($rtAdmin . '/quote-requests', 'ProductController::quoteRequests');
//category
$routes->get($rtAdmin . '/add-category', 'CategoryController::addCategory');
$routes->get($rtAdmin . '/categories', 'CategoryController::categories');
$routes->get($rtAdmin . '/edit-category/(:num)', 'CategoryController::editCategory/$1');
$routes->get($rtAdmin . '/bulk-category-upload', 'CategoryController::bulkCategoryUpload');
//brand
$routes->get($rtAdmin . '/brands', 'CategoryController::brands');
$routes->get($rtAdmin . '/edit-category/(:num)', 'CategoryController::editCategory/$1');
$routes->get($rtAdmin . '/bulk-category-upload', 'CategoryController::bulkCategoryUpload');
//custom fields
$routes->get($rtAdmin . '/add-custom-field', 'CategoryController::addCustomField');
$routes->get($rtAdmin . '/custom-fields', 'CategoryController::customFields');
$routes->get($rtAdmin . '/edit-custom-field/(:num)', 'CategoryController::editCustomField/$1');
$routes->get($rtAdmin . '/custom-field-options/(:num)', 'CategoryController::customFieldOptions/$1');
//earnings
$routes->get($rtAdmin . '/earnings', 'EarningsController::earnings');
$routes->get($rtAdmin . '/payout-requests', 'EarningsController::payoutRequests');
$routes->get($rtAdmin . '/payout-settings', 'EarningsController::payoutSettings');
$routes->get($rtAdmin . '/add-payout', 'EarningsController::addPayout');
$routes->get($rtAdmin . '/seller-balances', 'EarningsController::sellerBalances');
//blog
$routes->get($rtAdmin . '/blog-add-post', 'BlogController::addPost');
$routes->get($rtAdmin . '/blog-posts', 'BlogController::posts');
$routes->get($rtAdmin . '/edit-blog-post/(:num)', 'BlogController::editPost/$1');
$routes->get($rtAdmin . '/blog-categories', 'BlogController::categories');
$routes->get($rtAdmin . '/edit-blog-category/(:num)', 'BlogController::editCategory/$1');
//hosting
$routes->get($rtAdmin . '/blog-add-post', 'BlogController::addPost');
$routes->get($rtAdmin . '/blog-posts', 'BlogController::posts');
$routes->get($rtAdmin . '/edit-blog-post/(:num)', 'BlogController::editPost/$1');
$routes->get($rtAdmin . '/hosting-categories', 'Admin\Hosting::categories');
$routes->get($rtAdmin . '/edit-blog-category/(:num)', 'BlogController::editCategory/$1');
//comments & reviews
$routes->get($rtAdmin . '/pending-product-comments', 'ProductController::pendingComments');
$routes->get($rtAdmin . '/product-comments', 'ProductController::comments');
$routes->get($rtAdmin . '/pending-blog-comments', 'BlogController::pendingComments');
$routes->get($rtAdmin . '/blog-comments', 'BlogController::comments');
$routes->get($rtAdmin . '/reviews', 'ProductController::reviews');
$routes->get($rtAdmin . '/contact-messages', 'Admin\Admin::contactMessages');
//abuse reports
$routes->get($rtAdmin . '/abuse-reports', 'Admin\Admin::abuseReports');
//ad spaces
$routes->get($rtAdmin . '/ad-spaces', 'Admin\Admin::adSpaces');
//seo tools
$routes->get($rtAdmin . '/seo-tools', 'Admin\Admin::seoTools');
//location
$routes->get($rtAdmin . '/location-settings', 'Admin\Admin::locationSettings');
$routes->get($rtAdmin . '/countries', 'Admin\Admin::countries');
$routes->get($rtAdmin . '/states', 'Admin\Admin::states');
$routes->get($rtAdmin . '/add-country', 'Admin\Admin::addCountry');
$routes->get($rtAdmin . '/edit-country/(:num)', 'Admin\Admin::editCountry/$1');
$routes->get($rtAdmin . '/add-state', 'Admin\Admin::addState');
$routes->get($rtAdmin . '/edit-state/(:num)', 'Admin\Admin::editState/$1');
$routes->get($rtAdmin . '/cities', 'Admin\Admin::cities');
$routes->get($rtAdmin . '/add-city', 'Admin\Admin::addCity');
$routes->get($rtAdmin . '/edit-city/(:num)', 'Admin\Admin::editCity/$1');
//membership
$routes->get($rtAdmin . '/users', 'MembershipController::users');
$routes->get($rtAdmin . '/shop-opening-requests', 'MembershipController::shopOpeningRequests');
$routes->get($rtAdmin . '/add-user', 'MembershipController::addUser');
$routes->get($rtAdmin . '/edit-user/(:num)', 'MembershipController::editUser/$1');
$routes->get($rtAdmin . '/membership-plans', 'MembershipController::membershipPlans');
$routes->get($rtAdmin . '/transactions-membership', 'MembershipController::transactionsMembership');
$routes->get($rtAdmin . '/edit-plan/(:num)', 'MembershipController::editPlan/$1');
$routes->get($rtAdmin . '/roles-permissions', 'MembershipController::rolesPermissions');
$routes->get($rtAdmin . '/add-role', 'MembershipController::addRole');
$routes->get($rtAdmin . '/edit-role/(:num)', 'MembershipController::editRole/$1');
//support
$routes->get($rtAdmin . '/knowledge-base', 'SupportAdminController::knowledgeBase');
$routes->get($rtAdmin . '/knowledge-base/add-content', 'SupportAdminController::addContent');
$routes->get($rtAdmin . '/knowledge-base/edit-content/(:num)', 'SupportAdminController::editContent/$1');
$routes->get($rtAdmin . '/knowledge-base-categories', 'SupportAdminController::categories');
$routes->get($rtAdmin . '/knowledge-base/add-category', 'SupportAdminController::addCategory');
$routes->get($rtAdmin . '/knowledge-base/edit-category/(:num)', 'SupportAdminController::editCategory/$1');
$routes->get($rtAdmin . '/support-tickets', 'SupportAdminController::supportTickets');
$routes->get($rtAdmin . '/support-ticket/(:num)', 'SupportAdminController::supportTicket/$1');
//refund
$routes->get($rtAdmin . '/refund-requests', 'Admin\Order::refundRequests');
$routes->get($rtAdmin . '/refund-requests/(:num)', 'Order::refund/$1');
//languages
$routes->get($rtAdmin . '/language-settings', 'Admin\Language::languageSettings');
$routes->get($rtAdmin . '/edit-language/(:num)', 'Admin\Language::editLanguage/$1');
$routes->get($rtAdmin . '/edit-translations/(:num)', 'Admin\Language::editTranslations/$1');
$routes->get($rtAdmin . '/search-phrases', 'Admin\Language::searchPhrases');
//newsletter
$routes->get($rtAdmin . '/newsletter', 'Admin\Admin::newsletter');

//currency
$routes->get($rtAdmin . '/currency-settings', 'Admin\Admin::currencySettings');
$routes->get($rtAdmin . '/add-currency', 'Admin\Admin::addCurrency');
$routes->get($rtAdmin . '/edit-currency/(:num)', 'Admin\Admin::editCurrency/$1');
//settings
$routes->get($rtAdmin . '/general-settings', 'Admin\Admin::generalSettings');
$routes->get($rtAdmin . '/email-settings', 'Admin\Admin::emailSettings');
$routes->get($rtAdmin . '/social-login', 'Admin\Admin::socialLoginSettings');
$routes->get($rtAdmin . '/payment-settings', 'Admin\Admin::paymentSettings');
$routes->get($rtAdmin . '/visual-settings', 'Admin\Admin::visualSettings');
$routes->get($rtAdmin . '/preferences', 'Admin\Admin::preferences');
$routes->get($rtAdmin . '/product-settings', 'Admin\Admin::productSettings');
$routes->get($rtAdmin . '/font-settings', 'Admin\Admin::fontSettings');
$routes->get($rtAdmin . '/edit-font/(:num)', 'Admin\Admin::editFont/$1');
$routes->get($rtAdmin . '/route-settings', 'Admin\Admin::routeSettings');
$routes->get($rtAdmin . '/cache-system', 'Admin\Admin::cacheSystem');
$routes->get($rtAdmin . '/storage', 'Admin\Admin::storage');

/*
 * --------------------------------------------------------------------
 * Dynamic Routes
 * --------------------------------------------------------------------
 */


 if (!empty($languages)) {
    foreach ($languages as $language) {
        $key = '';
        if ($generalSettings->site_lang != $language->id) {
            $key = $language->short_form . '/';
            $routes->get($language->short_form, 'Web\Home::index');
        }
        //auth
        $routes->get($key . $csrt->authlogin, 'Web\Auth::index');
        $routes->get($key . $csrt->register, 'Web\Auth::register');
        //blog
        $routes->get($key . $csrt->blog, 'Web\Blog::index');
        $routes->get($key . $csrt->blog . '/' . $csrt->tag . '/(:any)', 'Web\Blog::tag/$1');
        $routes->get($key . $csrt->blog . '/(:any)/(:any)', 'Web\Blog::post/$1/$2');
        $routes->get($key . $csrt->blog . '/(:any)', 'Web\Blog::blogCategory/$1');
        //Hosting
        $routes->get($key . $csrt->hosting, 'Web\Hosting::index');
        // $routes->get($key . $csrt->blog . '/' . $csrt->tag . '/(:any)', 'Web\Hosting::tag/$1');
        // $routes->get($key . $csrt->blog . '/(:any)/(:any)', 'Web\Hosting::post/$1/$2');
        $routes->get($key . $csrt->hosting . '/(:any)', 'Web\Hosting::category/$1');
        //contact
        $routes->get($key . $csrt->contact, 'Web\Page::contact');
        //terms & conditions
        $routes->get($key . $csrt->terms_conditions, 'Web\Page::termsConditions');
        //hosting 
        $routes->get($key . $csrt->hosting, 'Web\Hosting::index');     

        if ($generalSettings->site_lang != $language->id) {
            // $routes->get($key . '(:any)/(:any)', 'HomeController::subCategory/$1/$2');
            // $routes->get($key . '(:any)', 'HomeController::any/$1');
        }

    }
}







// $routes->get('/hosting', 'Web\Hosting::index');


// $routes->get('login', 'Web\Auth::login');







// $routes->get('(:any)/(:any)', 'Web\Home::any/$1/$2');
$routes->get('(:any)', 'Web\Page::any/$1');
// $routes->get('/login', 'Web\Auth::index');
