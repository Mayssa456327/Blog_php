<?php

class Commentaire {
    private $id;
    private $description;

    function __construct($description){

        $this->description=$description;
       
    }

    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description=$description;
    }



    function getId(){
        return $this->id;
    }




























}
?>
