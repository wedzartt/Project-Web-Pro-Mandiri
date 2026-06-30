<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// Destinations
$routes->get('/destinations', 'Wisata::index');


// Destinations Detail numerate agar bisa terbaca didatabase
// YG JADI ACUAN
$routes->get(
    '/destinations/(:num)',
    'Wisata::detail/$1'
);

// Booking Summary
$routes->get(
    'booking/summary',
    'Booking::summary'
);

$routes->post(
    'booking/summary',
    'Booking::summary'
);

// Payment
$routes->get(
    'payment/(:num)',
    'Payment::index/$1'
);

$routes->post(
    'payment/(:num)',
    'Payment::index/$1'
);


$routes->post(
    'payment/process',
    'Payment::process'
);

// Success Page
$routes->get(
    'payment/success/(:num)',
    'Payment::success/$1'
);

$routes->post('/succes', 'Succes::index');

$routes->get(
    'my-journey/(:num)',
    'Journey::index/$1'
);

$routes->post(
    '/my-journey',
    'Journey::index'
);



$routes->post('booking/proses', 'Wisata::proses');



$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');

$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::register');

$routes->get('logout', 'Auth::logout');


$routes->get('', 'Auth::logout');




$routes->get('admin/dashboard', 'Admin\Dashboard::index');

$routes->group('admin', 
    
   function ($routes) {


    // a nya harus kecil meyesuaikan nama folder
    $routes->get('dashboard', 'Admin\Dashboard::index');

    $routes->get('booking', 'Admin\Booking::index');

    $routes->get('transaction', 'Admin\Transaction::index');

    $routes->get('wisata', 'Admin\Wisata::index');
});

