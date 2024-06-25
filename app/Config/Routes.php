<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Post;

$routes->get('/', fn () => redirect('posts'));

$routes->get('posts', [Post::class, 'list']);
$routes->get('posts/new', [Post::class, 'form']);
$routes->post('posts', [Post::class, 'store']);
$routes->get('posts/(:segment)', [Post::class, 'show']);
