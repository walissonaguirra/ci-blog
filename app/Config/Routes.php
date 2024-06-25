<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Post;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('posts', [Post::class, 'index']);
$routes->post('posts', [Post::class, 'store']);
$routes->get('posts/(:segment)', [Post::class, 'show']);


$routes->get('news', 'News::index');
$routes->get('news/new', 'News::new');
$routes->post('news', 'News::create');
$routes->get('news/(:segment)', 'News::show/$1');

$routes->get('pages', 'Pages::index');
$routes->get('(:segment)', 'Pages::view');
