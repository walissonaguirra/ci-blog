<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('news', 'News::index');
$routes->get('news/(:segment)', 'News::show');

$routes->get('pages', 'Pages::index');
$routes->get('(:segment)', 'Pages::view');
