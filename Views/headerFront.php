<!DOCTYPE html>
<html lang="en">

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

<body id="page-top" class="regular-navigation">


    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading" /></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie" href="index.html">THE <span class="theme-accent-color">GRILL</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../article/afficherArticleFront.php">Articles</a></li>     
                        <li><a href="../user/my-profile.php?username=<?php $_SESSION['username'] ?><?php $_SESSION['password'] ?>"> Profile</a></li>                
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Singn <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../user/sign-in.php">Singn In</a></li>
                                <li><a href="404.html">Singn Up</a></li>
                            </ul>
                        </li>
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->         

            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">??</button>
            <form>
                <input type="search" value="" placeholder="Enter Search Term" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="fullheight dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="../../frontend/assets/img/bg/bg5.jpg" data-speed="0.8">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-center smoothie">
                    <h3 class="fancy wow fadeInDown" data-wow-delay="2s"><span>THIS BUN, IS STILL IN THE OVEN</span></h3>
                    <div class="text-center nopadding white wow fadeIn" data-wow-delay="3.5s">
                        <div id="countdown"></div>
                    </div>
                </div>
            </div>
        </header>


    <script src="../frontend/assets/js/jquery.js"></script>
    <script src="../frontend/assets/js/bootstrap.min.js"></script>
    <script src="../frontend/assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="../frontend/assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
    $(document).ready(function(){
       'use strict';
        jQuery('#headerwrap').backstretch([
          "assets/img/bg/bg1.jpg",
          "assets/img/bg/bg2.jpg",
          "assets/img/bg/bg3.jpg",
        ], {duration: 8000, fade: 500});
    });
    </script>

</body>

</html>
