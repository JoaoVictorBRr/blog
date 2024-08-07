<?php 

namespace Source\App;

use CoffeeCode\DataLayer\DataLayer;

class Images extends DataLayer{

    private $id;
    private $file_path;
    private $post_id;
    private $data;

    function __construct(){
        parent::__construct("images", ["file_path", "post_id"], "id", false);
    }


    private function createImage($data){}
    public function getImage(){}
    private function updateImage(){}
    private function deleteImage(){}


}