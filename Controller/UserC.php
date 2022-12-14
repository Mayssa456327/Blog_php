<?php

include_once  '../../config.php';
include_once  '../../Model/User.php';


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
		

			$sql="UPDATE user  SET username= :username,password= :password ,role= : role WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':username', $user->getUsername());
			$req->bindValue(':id', $id);
			$req->bindValue(':password', $user->getPassword());
            $req->bindValue(':role', $user->getRole());
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





    function recupererUser($id){
        $sql="SELECT * from user where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function afficherUsertri(){
        $sql='SELECT * FROM user ORDER BY username ASC  ';
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return ($list);

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }


    function login($username,$password){
        $sql="SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $db=config::getConnexion();
        try{
        
  
            $query=$db->prepare($sql);
            $query->execute();
            $user=$query->fetch();
           // var_dump($user['email']);
            $password=$user['password'];
            $role=$user['role'];
            $id=$user['id'];
            $count= $query->rowCount();
            if($count == 1) {
              
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['role'] =$role;
                
                if($role == 'ADMIN'){
                    header("location:../article/afficherArticleBack.php");
                }
                else
                header("location:my-profile.php?username=$username&id=$id&password=$password");
             }else {
                $error = "Your Login Name or Password is invalid";
             }
           
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }




}
?>