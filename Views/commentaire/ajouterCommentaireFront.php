<?php
include '../headerBack.php'; 
include '../../Model/Commentaire.php';
include '..\..\Controller\CommentaireC.php';
$commentaireC=new CommentaireC();

$error = "";

// create adherent
$commentaire = null;

if (
   
    isset($_POST["article"]) &&		
    isset($_POST["description"]) 
    
) {
    if (
       
        !empty($_POST['article']) &&
        !empty($_POST["description"]) 
    ) {
        $article = new Article(

            $_POST['article'],
            $_POST['description'], 
        
        );
        $commentaireC->ajouterCommentaire($commentaire);
       
    }
    else
        $error = "Missing information";
}

?>

<div class="container-fluid">
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
                                        <label class="col-md-12 p-0">Article</label>
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
            </div>