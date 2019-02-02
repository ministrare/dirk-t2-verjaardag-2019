<?php

include_once '../core/init.php';

/**
 * Dispatching the world
 */


REQUEST_PAGE;

switch (REQUEST_PAGE){
    case '/':
        $homeController = new Controllers\LoginViewController();
        $homeController->index();
    break;

    case '/users' || '/users/':
        $homeController = new Controllers\LoginViewController();
        $homeController->index();
        break;

    default:
        $viewController = new Controllers\ViewController();
        $viewController->page_404();
    break;
}