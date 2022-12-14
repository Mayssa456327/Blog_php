<?php

include_once '../../config.php';
include_once '../../Model/Commentaire.php';


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

    function modifierCommentaire($commentaire,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE commentaire  SET description= :description WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':description', $commentaire->getDescription());
			$req->bindValue(':id', $id);
		
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
      
		} catch (PDOException $e) {
			$e->getMessage();
		}

		
	}


    function supprimerCommentaire($id){
        $sql="DELETE FROM commentaire WHERE id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{

            $req->execute();
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }



    function afficherCommentaire(){
        $sql='SELECT * FROM commentaire  ';
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return ($list);

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }

    function recupererCommentaire($id){
        $sql="SELECT * from commentaire where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $commentaire=$query->fetch();
            return $commentaire;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function afficherCommentaireparArticle($id){
        $sql='SELECT * FROM commentaire where articleId= '.$id .'' ;
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return ($list);

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }

}
?>