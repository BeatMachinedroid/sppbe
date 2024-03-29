<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth\AuthController::login');
$routes->get('/register', 'Auth\AuthController::index');
$routes->post('/register/post', 'Auth\AuthController::register');
$routes->post('/login/post', 'Auth\AuthController::proses');
$routes->get('/profile/' , 'Auth\AuthController::profil');
$routes->group('', ['filter' => 'admin'], function($routes){
    // barang
    $routes->get('/dashboard', 'Home::index');
    $routes->get('/dashboard/logout', 'Auth\AuthController::logout' );

    // pelanggan
    $routes->get('/dashboard/customer', 'Dashboard\CustomerController::index');
    $routes->post('/dashboard/customer/post', 'Dashboard\CustomerController::store');
    $routes->get('/dashboard/customer/delete/(:segment)', 'Dashboard\CustomerController::delete/$1');
    $routes->post('/dashboard/customer/edit/(:segment)', 'Dashboard\CustomerController::edit/$1');
    $routes->get('/dashboard/customer/search', 'Dashboard\CustomerController::search');

    // penjualan
    $routes->get('/dashboard/penjualan', 'Dashboard\PenjualanController::index');
    $routes->post('/dashboard/penjualan/post', 'Dashboard\PenjualanController::store');
    $routes->post('/dashboard/penjualan/edit/(:segment)', 'Dashboard\PenjualanController::edit/$1');
    $routes->get('/dashboard/penjualan/delete/(:segment)', 'Dashboard\PenjualanController::delete/$1');
    $routes->get('/dashboard/penjualan/search', 'Dashboard\PenjualanController::search');
    
    // pembelian
    $routes->get('/dashboard/pembelian', 'Dashboard\PembelianController::index');
    $routes->post('/dashboard/pembelian/post', 'Dashboard\PembelianController::store');
    $routes->post('/dashboard/pembelian/edit/(:segment)', 'Dashboard\PembelianController::edit/$1');
    $routes->get('/dashboard/pembelian/delete/(:segment)', 'Dashboard\PembelianController::delete/$1');
    $routes->get('/dashboard/pembelian/search', 'Dashboard\PembelianController::search');

    //kas masuk
    $routes->get('/dashboard/kas/masuk', 'Dashboard\KasMasukController::index');
    $routes->post('/dashboard/kas/masuk/post', 'Dashboard\KasMasukController::store');
    $routes->post('/dashboard/kas/masuk/edit/(:segment)', 'Dashboard\KasMasukController::edit/$1');
    $routes->get('/dashboard/kas/masuk/delete/(:segment)', 'Dashboard\KasMasukController::delete/$1');
    $routes->get('/dashboard/kas/masuk/search', 'Dashboard\KasMasukController::search');

    // Kas keluar
    $routes->get('/dashboard/kas/keluar', 'Dashboard\KasKeluarController::index');
    $routes->post('/dashboard/kas/keluar/post', 'Dashboard\KasKeluarController::store');
    $routes->post('/dashboard/kas/keluar/edit/(:segment)', 'Dashboard\KasKeluarController::edit/$1');
    $routes->get('/dashboard/kas/keluar/delete/(:segment)', 'Dashboard\KasKeluarController::delete/$1');
    $routes->get('/dashboard/kas/keluar/search', 'Dashboard\KasKeluarController::search');

    // laporan
    $routes->get('/dashboard/kas/laporan', 'Dashboard\LaporanController::index');
    $routes->get('/dashboard/kas/laporan/search', 'Dashboard\LaporanController::search');
    $routes->get('pdf', 'Dashboard\LaporanController::generatePdf');
    $routes->get('print', 'Dashboard\LaporanController::print');


    // akun
    $routes->get('/dashboard/acount', 'Auth\AuthController::acount');

    
}); 
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
