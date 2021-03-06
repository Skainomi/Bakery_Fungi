<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->add('/', 'UserController::index', ['as' => 'index']);
$routes->add('/store', 'StoreController::index');
$routes->get('/item/(:any)', 'ItemController::index/$1');
$routes->add('/login', function(){
    return view("user/login");
}, ['as' => 'login']);
$routes->post('/login-check', 'Auth::userLogin', ['as' => 'login_check']);
$routes->add('/log-out', 'Auth::userLogout', ['as' => 'logout']);
$routes->add('/about', 'AboutController::index', ['as' => 'about']);
$routes->add('/cart', 'CartController::index', ['as' => 'cart']);
$routes->add('/check-out', 'CheckoutController::index', ['as' => 'check_out']);
$routes->add('/check-finish', 'CheckoutController::finish', ['as' => 'finish_check']);
$routes->add('/register', function(){
    return view("user/register");
}, ['as' => 'register']);
$routes->post('/register-check', 'Auth::userRegister');
$routes->post('/cart-add', 'ItemController::add');
$routes->post('/check-add', 'CheckoutController::add');
$routes->post('/delete-Cart', 'CartController::destroy');
$routes->add('/account', 'Auth::account', ['as' => 'account']);
$routes->add('/finish-order', 'CheckoutController::finish', ['as' => 'finish_order']);





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
