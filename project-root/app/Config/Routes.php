<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/users/create', 'UserController::create');
$routes->get('/users/edit/(:segment)', 'UserController::edit/$1');
$routes->post('/users/update/(:segment)', 'UserController::update/$1');

$routes->delete('/users/delete/(:segment)', 'UserController::destroy/$1');


$routes->post('/users/store', 'UserController::store');
$routes->get('/users/login', 'SessionController::index');

$routes->post('/users/login/store', 'SessionController::store');
$routes->get('/users/destroy', 'SessionController::destroy');
