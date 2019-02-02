<?php

namespace Controllers;


use Models\ViewModel;

class HomeController {

    public function index() {

        $oView = new ViewModel();
        echo __DIR__;
        include_once '../views/login/login.form.php';
    }

}