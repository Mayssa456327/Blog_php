<?php
	include_once '../../config.php';
	include_once '../../Model/Article.php';



class ArticleC{ 

    function ajouterArticle($article){

        $sql="INSERT INTO article (description, titre) VALUES (:description, :titre)";
        $db = config::getConnexion();

        try {

            $query = $db->prepare($sql);

            $query->execute([
                'description' =>$article->getDescription(),
                'titre' =>$article->getTitre(),
               
            ]);
            $description=$article->getDescription();
            $titre=$article->getTitre();
            
           // header("location: welcome.php?username=$username,email=$email");

        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage();

        }

    }
    function modifierArticle($article,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE article  SET description= :description,titre= :titre WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':description', $user->getDescription());
			$req->bindValue(':id', $id);
			$req->bindValue(':titre', $user->getTitre());
			
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
      
		} catch (PDOException $e) {
			$e->getMessage();
		}

		
	}


    function supprimerArticle($id){
        $sql="DELETE FROM article WHERE id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{

            $req->execute();
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }



    function afficherArticle(){
        $sql='SELECT * FROM article  ';
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return ($list);

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }


    
		function recupererArticle($id){
			$sql="SELECT * from article where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$article=$query->fetch();
				return $article;
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
    
        function recherche($titre,$description){
            $sql="SELECT * FROM article where titre like '" .$titre."' or description like '".$description."'";
            $db = config::getConnexion();
            
            try{
                
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }
	











    
}
?>