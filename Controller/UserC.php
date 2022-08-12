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

    function modifierUtilisateur($user,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE user  SET username= :username,password= :password WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':username', $user->getUsername());
			$req->bindValue(':id', $id);
			$req->bindValue(':password', $user->getPassword());
			
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
      
		} catch (PDOException $e) {
			$e->getMessage();
		}

		
	}


    function supprimerUtilisateur($id){
        $sql="DELETE FROM user WHERE id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{

            $req->execute();
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }

    function afficherUtilisateur(){
        $sql='SELECT * FROM user  ';
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