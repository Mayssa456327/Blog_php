<?php

   include '..\..\Controller\UserC.php';
   $userC = new UserC();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword =$_POST['password']; 
      

      $userC->login($myusername,$mypassword);
      
    
   }
?>

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../frontend/assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../frontend/assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../frontend/assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../frontend/assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../frontend/assets/img/ico/apple-touch-icon-57x57.png">

    <title>The Grill by Distinctive Themes</title>

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


<section class="content">
            <section class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <form class="form clearfix" action="" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Username</label>
                                    <input name="username" type="text" class="form-control" id="username" placeholder="Your username" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <!--end form-group-->
                                
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                        <input type="checkbox" name="remember" value="1">
                                        Remember Me
                                    </label>
                                    
                                    <input type="submit" class="btn btn-primary" value="Sign In" ></button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                Troubles with signing? <a href="#" class="link">Click here.</a>
                            </p>
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->