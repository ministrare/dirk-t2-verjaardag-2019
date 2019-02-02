<?php

namespace Controllers;


use Models\ViewModel;

class HomeController {

    public function index() {
        //include_once "../views/login/login.form.php";
        $oView = new ViewModel();

        echo 'Test';
    }
}