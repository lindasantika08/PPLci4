<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Routing\Router;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::display');
$routes->get('/mahasiswa', 'Mahasiswa::display');
$routes->get('/barang', 'Barang::index'); // Menampilkan daftar barang
$routes->get('/barang/view/(:segment)', 'Barang::view/$1'); // Menampilkan detail barang
$routes->get('/barang/delete/(:segment)', 'Barang::delete/$1'); // Menghapus barang
$routes->get('/barang/search', 'Barang::search');
$routes->get('/barang/update/(:num)', 'Barang::update/$1');
$routes->post('/barang/updateAction/(:num)', 'Barang::updateAction/$1');
$routes->get('/barang/input', 'Barang::input');
$routes->post('/barang/add', 'Barang::add');

$routes->get('/CHome', 'CHome::index', ['filter' => 'auth']);
$routes->get('/CInfo', 'CInfo::index', ['filter' => 'auth']);
$routes->get('/CBarang', 'CBarang::index', ['filter' => 'auth']);
$routes->get('/CBarang/search', 'CBarang::search', ['filter' => 'auth']);
$routes->get('/CBarang/view/(:segment)', 'CBarang::view/$1', ['filter' => 'auth']);
$routes->get('/CBarang/input', 'CBarang::input', ['filter' => 'auth']);
$routes->post('/CBarang/add', 'CBarang::add', ['filter' => 'auth']);
$routes->get('/CBarang/delete/(:segment)', 'CBarang::delete/$1', ['filter' => 'auth']); // Menghapus barang
$routes->get('/CBarang/update/(:num)', 'CBarang::update/$1', ['filter' => 'auth']);
$routes->post('/CBarang/updateAction/(:num)', 'CBarang::updateAction/$1', ['filter' => 'auth']);

$routes->get('/FormValidation', 'FormValidation::index'); // Route to display the form
$routes->post('/formValidation/submit', 'FormValidation::submit');

$routes->get('/CLogin', 'CLogin::index', ['filter' => 'loggedin']);
$routes->post('/auth/login', 'AuthController::login');
$routes->post('/auth/logout', 'AuthController::logout');

$routes->get('/CBarang/dataTable', 'CBarang::dataTable', ['filter' => 'auth']);

$routes->get('/', function () {
    return redirect()->to('/CHome');
});
