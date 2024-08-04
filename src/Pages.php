<?php 

namespace Source;

use League\Plates\Engine;

Class Pages{
    private $view;

    function __construct(){
        $this->view = new Engine((dirname(__DIR__)) . "/views", "php");

    }
    
    public function homePage(){
        echo $this->view->render("header");
        echo $this->view->render("home");
        echo $this->view->render("footer");
    }

    public function conhecaBairrosPage(){
        echo $this->view->render("header");
        echo $this->view->render("conheca-os-bairros");
        echo $this->view->render("footer");
    }

    
}