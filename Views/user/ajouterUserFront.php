<?php
include '../../Model/User.php';
include '../../Controller/UserC.php';
$userC=new UserC();

$error = "";
// create adherent
$user = null;

if (
   
    isset($_POST["username"]) &&		
    isset($_POST["password"]) &&		
    isset($_POST["role"]) 
    
) {
    if (
       
        !empty($_POST['username']) &&
        !empty($_POST["password"]) &&
        !empty($_POST["role"]) 
    ) {
        $user= new user(

            $_POST['username'],
            $_POST['password'], 
            $_POST['role']
        );
        $userC->ajouterUtilisateur($user);
       
    }
    else
        $error = "Missing information";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../frontend/assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../frontend/assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../frontend/assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../frontend/assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../frontend/assets/img/ico/apple-touch-icon-57x57.png">

    <title>The Grill</title>

    <!-- Bootstrap Core CSS -->
    <link href="../frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../frontend/assets/css/animate.css" rel="stylesheet">
    <link href="../frontend/assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../frontend/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../frontend/assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../frontend/assets/css/pe-icons.css" rel="stylesheet">

</head>
<body>






    <div class="row">
        <div class=" col-md-offset-1  ">
            <div class="row">
                <div id="message" class=""></div>
                <form method="post" action="" id="contactform" class="" data-wow-delay="0.2s">
                <h3 class="mb30 white">to sign up</h3>
                    <input type="text" class=" form col-md-4 " name="username" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                <input type="password" class="form col-md-4" name="password" placeholder="Your password *" id="pwd" required data-validation-required-message="Please enter your email address." />
                   <input type="text" class="form col-md-4  " name="role" placeholder="Your role *" id="role" required data-validation-required-message="Please enter your web address." />
                      
                   <input class="btn btn-primary btn-white mt30 pull-right" type="submit" name="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>