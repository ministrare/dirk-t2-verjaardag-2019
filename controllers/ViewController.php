<?php

namespace Controllers;

use Models\ViewModel;

class ViewController {
    private $oViewModel;

    public function __construct()
    {
        $this->oViewModel = new ViewModel();
    }

    public function page_404() {

        echo 'Page Not Found';
    }

}