<?php

use CodeIgniter\Config\Services;
use CodeIgniter\Router\RouteCollection;
$routes =Services::routes();

// $routes ->setDefaultNamespace('app\Controllers');

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
//   $routes ->get('', 'Stock::index');
 $routes->get('/Stock','StockController::index');
 
 $routes->get('/Stock/verDetalle/(:num)',
 'StockController::verDetalle/$1');
 
 $routes->get('/stock/actualizarStock/(:num)',
 'StockController::actualizarStockform/$1');
 
 $routes->post('/stock/actualizarStock/(:num)',
 'StockController::actualizarStock/$1');
 
 
 