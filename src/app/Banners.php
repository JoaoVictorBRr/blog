<?php 

namespace Source\App;

use CoffeeCode\DataLayer\DataLayer;

class Banners extends DataLayer{

    private $id;
    private $file_path;
    private $post_id;
    private $data;

    function __construct(){
        parent::__construct("images", ["file_path", "post_id"], "id", false);
    }


    private function createBanner($data){}
    public function getBanner(){}
    private function updateBanner(){}
    private function deleteBanner(){}


}