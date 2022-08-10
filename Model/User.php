<?php

class User {
    private $id;
    private $username;
    private $password;
    private $role;

    function __construct($username,$password,$role){

        $this->username=$username;
        $this->password=$password;
        $this->role=$role;

    }

    function getRole(){
        return $this->role;
    }
    function setRole($role){
        $this->role=$role;
    }

    function getUsername(){
        return $this->username;
    }
    function setUsername($username){
        $this->username=$username;
    }

    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password=$password;
    }

    function getId(){
        return $this->id;
    }




   




}
?>
