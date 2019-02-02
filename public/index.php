<?php

include_once '../core/init.php';

$router = new Models\Router(new Models\Request);


/**
 * Dispatching the world
 */
$router->get('/', function() {
    $controller = new Controllers\LoginViewController();
    $controller->index();
});

$router->get('/users', function() {
    $controller = new Controllers\LoginViewController();
    $controller->users();
});