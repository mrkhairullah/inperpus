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

$routes->get('books', 'BooksController::index', [
  'as' => 'books.index'
]);
$routes->get('books/trash', 'BooksController::trash', [
  'as' => 'books.trash'
]);
$routes->get('books/new', 'BooksController::new', [
  'as' => 'books.new'
]);
$routes->post('books/create', 'BooksController::create', [
  'as' => 'books.create'
]);
$routes->get('books/show/(:segment)', 'BooksController::show/$1', [
  'as' => 'books.show'
]);
$routes->get('books/edit/(:segment)', 'BooksController::edit/$1', [
  'as' => 'books.edit'
]);
$routes->post('books/update/(:segment)', 'BooksController::update/$1', [
  'as' => 'books.update'
]);
$routes->post('books/delete/(:segment)', 'BooksController::delete/$1', [
  'as' => 'books.delete'
]);
$routes->post('books/purge-delete/(:segment)', 'BooksController::purgeDelete/$1', [
  'as' => 'books.purge-delete'
]);
$routes->post('books/restore/(:segment)', 'BooksController::restore/$1', [
  'as' => 'books.restore'
]);
