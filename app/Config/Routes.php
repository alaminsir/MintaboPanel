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



// $routes->get('/contact', 'Web\Home::contact');
$routes->get('/login', 'Web\Auth::index');

$routes->get('/market', 'Market\Home::index');
$routes->get('/panel', 'Panel\Dashboard::index');



/*
 * --------------------------------------------------------------------
 * Admin Routes
 * --------------------------------------------------------------------
 */
$routes->get($rtAdmin, 'Admin\Admin::index');
$routes->get($rtAdmin . '/login', 'Admin\Auth::index'); 
// $routes->post($rtAdmin . '/login-post', 'Admin\Auth::adminLoginpost');
//navigation
$routes->get($rtAdmin . '/navigation', 'Admin\Admin::navigation');
$routes->get($rtAdmin . '/themes', 'Admin\Admin::themes');
// $routes->get($rtAdmin . '/homepage-manager', 'Admin\Admin::homepageManager');
// $routes->get($rtAdmin . '/edit-banner/(:num)', 'Admin\Admin::editIndexBanner/$1');























$routes->get('(:any)/(:any)', 'Web\Home::any/$1/$2');
$routes->get('(:any)', 'Web\Home::any/$1');
