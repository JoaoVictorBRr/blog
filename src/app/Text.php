<?php 

namespace Source\App;

use CoffeeCode\DataLayer\DataLayer;

class Text extends DataLayer{

    private $id;
    private $text;
    private $post_id;
    private $data;

    function __construct(){
        parent::__construct("images", ["text", "post_id"], "id", false);
    }

    private function createText($data){}
    public function getText(){}
    private function updateText(){}
    private function deleteText(){}


}