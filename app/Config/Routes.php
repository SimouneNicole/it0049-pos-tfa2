<?php

use App\Controllers\Customers;
use App\Controllers\Pages;
use App\Controllers\Users;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Pages::class, 'home']);
$routes->get('about', [Pages::class, 'about']);
$routes->get('customers', [Customers::class, 'index']);
$routes->get('users', [Users::class, 'index']);
