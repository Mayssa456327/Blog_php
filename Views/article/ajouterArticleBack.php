<?php
include '../headerBack.php'; 
include '../../Model/Article.php';
include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();

$error = "";

// create adherent
$article = null;

if (
   
    isset($_POST["titre"]) &&		
    isset($_POST["description"]) 
    
) {
    if (
       
        !empty($_POST['titre']) &&
        !empty($_POST["description"]) 
    ) {
        $article = new Article(

            $_POST['titre'],
            $_POST['description'], 
        
        );
        $articleC->ajouterArticle($article);
       
    }
    else
        $error = "Missing information";
}

?>

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Titre</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="titre"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea rows="5" class="form-control p-0 border-0" name="description"></textarea>
                                        </div>
                                    </div>
            
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <input type="submit" href="afficherArticleFront.php"class="btn btn-success" value="Add Article Now" ></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>