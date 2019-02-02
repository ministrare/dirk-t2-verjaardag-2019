<?php

include_once '../core/init.php';

/**
 * Dispatching the world
 */

if(isset($_GET['action']) && $_GET['action'] != "") {
    if($_GET['action'] == "user") {
        $postController = new Controllers\HomeController();
        $postController->user();
    }
} else {
    $homeController = new Controllers\HomeController();
    $homeController->index();
}
