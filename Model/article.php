<?php

class Article {
    private $id;
    private $description;
    private $titre;

    function __construct($titre,$description){

        $this->description=$description;
        $this->titre=$titre;
    }

    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description=$description;
    }

    function getTitre(){
        return $this->titre;
    }
    function setTitre($titre){
        $this->titre=$titre;
    }

    function getId(){
        return $this->id;
    }




























}
?>
