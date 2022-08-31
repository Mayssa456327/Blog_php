<?php
include '../headerFront.php'; 
include '../../Model/Commentaire.php';
include '..\..\Controller\CommentaireC.php';
$commentaireC=new CommentaireC();

$error = "";

// create adherent
$commentaire = null;

if (
   
   	
    isset($_POST["description"]) 
    
) {
    if (
       
 
        !empty($_POST["description"]) 
    ) {
        $commentaire = new Commentaire(

          
            $_POST['description'], 
        
        );
        $commentaireC->ajouterCommentaire($commentaire);
       
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
                                        <label class="col-md-12 p-0">Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea rows="5" class="form-control p-0 border-0" name="description"><?php echo $commentaire['description']; ?></p></textarea>
                                        </div>
                                    </div>
            
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <input type="submit" href="../afficherCommentaireFront.php"class="btn btn-success" value="Ajouter" ></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
        
            </div>
                                     