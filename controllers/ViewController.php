<?php

namespace Controllers;

use Models\ViewModel;

class ViewController {
    private $oViewModel;

    public function __construct($titel= NULL)
    {
        $this->oViewModel = new ViewModel($titel);
    }

    public function page_404() {

        echo 'Page Not Found';
    }

}