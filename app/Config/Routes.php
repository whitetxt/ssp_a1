<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get("/animals", "Animal::index");
$routes->get("/animals/(:num)", "Animal::view/$1");

$routes->get("/events", "Event::index");