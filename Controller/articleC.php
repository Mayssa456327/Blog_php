<?php


include "../connection.php";


////__________________________________Function  AJOUTER

class ArticleC {
function ajouter ($article){
try{

    $sql=" INSERT INTO article (id, titre, type,photo ,message) VALUES (:id,:titre, :type,:photo,:message)";

 $db=config::getConnexion();

 $query=$db->prepare ($sql);

        $query->bindValue(':id',$article->getId());  
        $query->bindValue('titre',$article->getTitre());  
        $query->bindValue(':type',$article->getType());  
        $query->bindValue(':photo',$article->getPhoto());  
        $query->bindValue(':message',$article->getMesssage());   
       
        $query->execute();
        echo"\n success";
        //header('location:affichage.php');
  
}
          catch(PDOException $e){
              $e->getMessage();
              echo"faild";
              echo $e->getMessage();
            }



  
}


}



?>