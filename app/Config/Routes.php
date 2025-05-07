<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes, [
  'except' => [
    'register',
    'magic-link',
    'auth-actions',
  ],
]);
