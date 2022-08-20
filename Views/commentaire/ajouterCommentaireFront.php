<?php
include '../headerFront.php'; 
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

<div id="comments-form" class="row wow fadeIn" data-wow-delay="0.2s">
     <div class="col-md-12">
        <div class="mt60 mb50 single-section-title">
         <h3>Leave A Reply</h3>
        </div>
            <div id="message"></div>
                <form method="post" id="commentform" class="comment-form">
                 <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                 <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                 <a class="btn btn-primary pull-right mt30" href="#">Reply</a>
                </form>
    </div>
                                        </div>