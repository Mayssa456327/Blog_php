<?php
include '../headerFront.php'; 
include_once '..\..\Controller\CommentaireC.php';
include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();
$article=$articleC->recupererArticle(1); 

$commentaires=$articleC->afficherCommentaireparArticle(1); 

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
            1
        
        );
        $commentaireC->ajouterCommentaire($commentaire);
       
    }
    else
        $error = "Missing information";
}
?>

<section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div id="post-content" class="col-sm-12 blog-item mb60 wow fadeIn" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-xs-2 post-left-col">
                                    <div class="post-date heading-font">
                                        <span class="the-date"></span>
                                        <span class="the-month"></span>
                                    </div>
                                </div>
                                <div class="col-xs-10 post-center single-post-content">
                                <h3>Article : <?php echo $article['titre']; ?></h3>
                                    <div class="mb50">
                                        <p></p>
                                        <p><?php echo $article['description']; ?></p>
                                    </div>

                                    <div id="comments-list" class="wow fadeIn" data-wow-delay="0.2s">
                                        <div class="mt60 mb50 single-section-title">
                                            
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="avatar comment-avatar" src="http://lorempixel.com/g/80/80/people/9" alt="">
                                            </div>
                                            <?php
                                                foreach($commentaires as $commentaire){
                                            ?>	

                                           <div class="media-body">
                                                <div class="well">
                                                    <div class="media-heading">
                                                            </div>
                                                    <p><?php echo $commentaire['description']; ?></p>
                                                    
                                                </div>
                                                
                                            </div>

                                            <?php } ?>
                                        </div><!--/.media-->
                                       

                                        <div id="comments-form" class="row wow fadeIn" data-wow-delay="0.2s">
            
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <p class="mt30"><a href="ajouterCommentaireFront.php" class="btn btn-success">Ajouter</a></p>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
        
            </div>
                          
                                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
