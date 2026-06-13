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