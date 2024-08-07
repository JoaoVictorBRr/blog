<?php 

namespace Source\App;
use Source\App\Images;
use Source\App\Banners;
use Source\App\Text;

use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer{

    private $id;
    private $title;
    private $chamada;
    private $author;
    private $destaque;
    private $status;
    private $data;
    private $categoria;

    function __construct(){
        parent::__construct("post-bairros", ["title", "status", "destaque"], "id", false);
    }

    private function createPost($data){
    
        $this->title = $data["title"];
        $this->chamada = $data["chamada"];
        $this->author = $data["autor"];
        $this->destaque = $data["destaque"];
        $this->status = $data["status"];
        $this->categoria = $data["categoria"];

        $Post = $this-save();
        $Post ? header("Location: " . URL_BASE ) : "Não foi possivel criar o post";

    }

    public function getPost(){}
    private function updatePost(){}
    private function deletePost(){}


}