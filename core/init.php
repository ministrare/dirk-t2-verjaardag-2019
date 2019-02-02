<?php
/**
 * Created by PhpStorm.
 * User: ministrare
 * Date: 2/02/2019
 * Time: 10:30
 */

session_start();

const DB_CONFIG = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username'=> 'lesley',
        'password'=> 'lesley',
        'db'=> 'calendar-dev'
    )
);

spl_autoload_register(function($class){
    require_once 'models/'. $class .'.php';
});

require_once "../controllers/HomeController.php";
//require_once "../controllers/LoginController.php";
//require_once "../controllers/AdminController.php";

//require_once "../controllers/UsersController.php";
//require_once "../controllers/UsersPlaylistsController.php";
//require_once "../controllers/UsersMessagesController.php";