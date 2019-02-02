<?php

include_once '../core/init.php';

/**
 * Dispatching the world
 */

if(isset($_GET['action']) && $_GET['action'] != "") {
    /*if($_GET['action'] == "new_post") {
        $postController = new postController();
        $postController->create();
    }*/
} else {
    $homeController = new Controllers\HomeController();
    $homeController->index();
}
