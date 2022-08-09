<?php

include '../config.php';
include '../Model/User.php';


class UserC{ 

    function ajouterUtilisateur($user){

        $sql="INSERT INTO user (username,password,role) VALUES (:username,:password,:role)";
        $db = config::getConnexion();

        try {

            $query = $db->prepare($sql);

            $query->execute([
                'username' =>$user->getUsername(),
                'password'=>$user->getPassword(),
                'role'=>'USER',
            ]);
            $username=$user->getUsername();
            $password=$user->getPassword();
           // header("location: welcome.php?username=$username,email=$email");


        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage();

        }





    }

















}
?>