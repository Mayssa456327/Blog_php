<?php

class Commentaire {
    private $id;
    private $description;
    private $article;


    function __construct($description,$article){

        $this->description=$description;
        $this->article=$article;
    }

    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description=$description;
    }

    function getArticle(){
        return $this->article;
    }
    function setArticle($article){
        $this->article=$article;
    }



    function getId(){
        return $this->id;
    }




























}
?>
