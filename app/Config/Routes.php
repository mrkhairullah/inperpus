<?php

use CodeIgniter\Router\RouteCollection;

helper(['presenter']);

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

$routes->group(
  'admin',
  [
    'filter' => ['session', 'group:admin'],
  ],
  static function (RouteCollection $routes) {
    $routes->view('/', 'pages/admin/dashboard', [
      'as' => 'dashboard',
    ]);

    presenter($routes, [
      'route'      => 'racks',
      'controller' => 'RacksController',
    ]);

    presenter($routes, [
      'route'      => 'books',
      'controller' => 'BooksController',
    ]);
  }
);
