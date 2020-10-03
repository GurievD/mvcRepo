<?php

/**
 * @var League\Route\Router $router
 */

use App\Controllers\SiteController;
use App\Controllers\TodoController;


$router
    ->get('/', [SiteController::class, 'index']);
$router->post('/new-book', [SiteController::class, 'newBook']);

$router->get('/todo', [TodoController::class, 'index']);
$router->post('/new-todo', [TodoController::class, 'newTodo']);