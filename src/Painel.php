<?php 

namespace Source;

use League\Plates\Engine;

Class Painel{
    private $view;

    function __construct(){
        $this->view = new Engine((dirname(__DIR__)) . "/views/painel", "php");

    }
    
    public function BairrosPainel(){
        echo $this->view->render("painel-header");
        echo $this->view->render("painel-bairros");
        echo $this->view->render("painel-footer");
    }
}