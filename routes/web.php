<?php

/**
 * @var League\Route\Router $router
 */

use Laminas\Diactoros\Response;

$router->get('/', function () {
    $res = new Response();
    $res->getBody()->write('Привет из web.php!');
    return $res;
});
