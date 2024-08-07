<?php 

namespace Source;

use League\Plates\Engine;

Class Pages{
    private $view;

    function __construct(){
        $this->view = new Engine((dirname(__DIR__)) . "/views", "php");

    }
    
    public function HomePage(){
        echo $this->view->render("header");
        echo $this->view->render("home");
        echo $this->view->render("footer");
    }

    public function ConhecaBairrosPage(){
        echo $this->view->render("header");
        echo $this->view->render("conheca-os-bairros");
        echo $this->view->render("footer");
    }

    public function MarcadoImobPage(){
        echo $this->view->render("header");
        echo $this->view->render("mercado-imob");
        echo $this->view->render("footer");
    }

    public function LancamentoPage(){
        echo $this->view->render("header");
        echo $this->view->render("lancamento");
        echo $this->view->render("footer");
    }

    public function DuoPage(){
        echo $this->view->render("header");
        echo $this->view->render("duo");
        echo $this->view->render("footer");
    }

    public function DecoracaoPage(){
        echo $this->view->render("header");
        echo $this->view->render("decoracao-paisagismo");
        echo $this->view->render("footer");
    }


    
}