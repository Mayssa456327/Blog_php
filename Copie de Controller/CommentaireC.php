<?php

include '../config.php';
include '../Model/Commentaire.php';


class CommentaireC{ 
    function ajouterCommentaire($commentaire){

        $sql="INSERT INTO commentaire (description) VALUES (:description)";
        $db = config::getConnexion();

        try {

            $query = $db->prepare($sql);

            $query->execute([
                'description' =>$commentaire->getDescription(),
               
            ]);
            $description=$commentaire->getDescription();
            
           // header("location: welcome.php?username=$username,email=$email");


        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage();

        }

    }
















    
}
?>