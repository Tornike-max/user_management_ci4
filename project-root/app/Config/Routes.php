<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/users/create', 'UserController::create');
$routes->get('/users/edit/(:segment)', 'UserController::create/$1');
$routes->post('/users/store', 'UserController::store');
