<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// Destinations
$routes->get('/destinations', 'Wisata::index');

// Destinations Detail numerate agar bisa terbaca didatabase
$routes->get(
    '/destinations/(:num)',
    'Wisata::detail/$1'
);

// Menampilkan form
// $routes->get('form', 'Wisata::form');

// $routes->post('form/proses', 'Wisata::proses');


$routes->post('booking/proses', 'Wisata::proses');

// Booking Summary
$routes->post('/booking/summary', 'Booking::summary');

// $routes->get(
//     'booking/summary/(:num)',
//     'Booking::summary/$1'
// );


$routes->get('/payment', 'Payment::index');
$routes->post('/payment', 'Payment::index');

// Payment
// $routes->get(
//     'payment/(:num)',
//     'Payment::index/$1'
// );

// $routes->post(
//     'payment/process',
//     'Payment::process'
// );

$routes->get('/succes', 'Succes::index');
$routes->post('/succes', 'Succes::index');

$routes->get('/my-journey', 'Journey::index');
$routes->post('/my-journey', 'Journey::index');


// Result
// $routes->get(
//     'payment/success/(:num)',
//     'Payment::success/$1'
// );

// $routes->get(
//     'payment/cancelled/(:num)',
//     'Payment::cancelled/$1'
// );

// $routes->post('/payment', 'Payment::index');

// Memproses data dari form (arahkan ke method proses)


// Menangkap ID (seperti angka 8) setelah kata update
