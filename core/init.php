<?php
/**
 * Created by PhpStorm.
 * User: ministrare
 * Date: 2/02/2019
 * Time: 10:30
 */

ini_set('display_errors', 'on');
define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localdev.dirk:8080/');

session_start();

require_once "global.setting.php";

spl_autoload_register(function($class){
    require_once '../'. $class .'.php';
});

require_once "../controllers/HomeController.php";
//require_once "../controllers/LoginController.php";
//require_once "../controllers/AdminController.php";

//require_once "../controllers/UsersController.php";
//require_once "../controllers/UsersPlaylistsController.php";
//require_once "../controllers/UsersMessagesController.php";