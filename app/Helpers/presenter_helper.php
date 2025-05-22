<?php

use CodeIgniter\Router\RouteCollection;

if (!function_exists('presenter')) {
  function presenter(RouteCollection $routes, array $config): void
  {
    $as            = '';
    $route         = $config['route'] ?? '';
    $controller    = $config['controller'] ?? '';
    $methodOptions = $config['methodOptions'] ?? [];

    if (! empty($route)) {
      $as = $route;
      $route = $route . '/';
    }

    if (! empty($config['as'])) {
      $as = $config['as'];
    }

    $routes->get(
      $route . '',
      $controller . '::index',
      array_merge([
        'as' => empty($as) ? null : $as . '.index',
      ], $methodOptions['index'] ?? [])
    );

    $routes->get(
      $route . 'trash',
      $controller . '::trash',
      array_merge([
        'as' => empty($as) ? null : $as . '.trash',
      ], $methodOptions['trash'] ?? [])
    );

    $routes->get(
      $route . 'new',
      $controller . '::new',
      array_merge([
        'as' => empty($as) ? null : $as . '.new',
      ], $methodOptions['new'] ?? [])
    );

    $routes->post(
      $route . 'create',
      $controller . '::create',
      array_merge([
        'as' => empty($as) ? null : $as . '.create',
      ], $methodOptions['create'] ?? [])
    );

    $routes->get(
      $route . 'show/(:segment)',
      $controller . '::show/$1',
      array_merge([
        'as' => empty($as) ? null : $as . '.show',
      ], $methodOptions['show'] ?? [])
    );

    $routes->get(
      $route . 'edit/(:segment)',
      $controller . '::edit/$1',
      array_merge([
        'as' => empty($as) ? null : $as . '.edit',
      ], $methodOptions['edit'] ?? [])
    );

    $routes->post(
      $route . 'update/(:segment)',
      $controller . '::update/$1',
      array_merge([
        'as' => empty($as) ? null : $as . '.update',
      ], $methodOptions['update'] ?? [])
    );

    $routes->post(
      $route . 'delete/(:segment)',
      $controller . '::delete/$1',
      array_merge([
        'as' => empty($as) ? null : $as . '.delete',
      ], $methodOptions['delete'] ?? [])
    );

    $routes->post(
      $route . 'purge-delete/(:segment)',
      $controller . '::purgeDelete/$1',
      array_merge([
        'as' => empty($as) ? null : $as . '.purge-delete',
      ], $methodOptions['purge-delete'] ?? [])
    );

    $routes->post(
      $route . 'restore/(:segment)',
      $controller . '::restore/$1',
      array_merge([
        'as' => empty($as) ? null : $as . '.restore',
      ], $methodOptions['restore'] ?? [])
    );
  }
}
