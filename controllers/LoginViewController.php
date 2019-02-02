<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 2/02/2019
 * Time: 14:15
 */

namespace Controllers;


class LoginViewController extends ViewController
{
    public function index() {

        include_once '../views/login/login.form.php';
    }
}