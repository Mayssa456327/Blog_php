<?php
include '../headerFront.php'; 

include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();
$listeArticle=$articleC->afficherArticleAccepter(); 



?>


<div class="container-fluid">

            <div class="row">
            <?php
			    foreach($listeArticle as $article){
			?>	
                <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover left-half" style="background-image: url('assets/img/bg/bg10.jpg');">
                    <div class="dark-opaqued-half section-inner pad-sides-60 match-height" data-mh="promo-inner">
                        <h3 class="mb50"><span class="theme-accent-color"><?php echo $article['titre']; ?></span></h3>
                        <p class="lead mb50"><?php echo $article['description']; ?></p>
                        <div class="spacer-180"></div>
                        <p class="mt30"><a href="detailArticle.php" class="btn btn-primary btn-red page-scroll"> Commentaire</a></p>
                        <a href="afficherarticleFavs.php?article_id=<?php echo $article['id']; ?> &user_id=1 " class="btn btn-primary btn-red page-scroll " name="favs">
	    								
                                        Ajouter au favoris
	    							</a>
                    
                    </div>
                </div>


	        <?php } ?>
            <br>

            </div>
</div>
