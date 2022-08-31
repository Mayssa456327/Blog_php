<?php
include '../headerFront.php'; 

include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();
$listeArticle=$articleC->afficherArticleAccepter(); 


$articleC->ajouterFavories($_GET["user_id"],$_GET["article_id"]);
    
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
                        <p class="mt30"><a href="detailArticle.php" class="btn btn-primary btn-red page-scroll">SEE Rceipe</a></p>
                        <form class="form-horizontal form-material" method="POST" action="">
                       
                        <a type="submit" name="submit"href="afficherarticleFavs.php?article_id=<?php echo $article['id']; ?>&user_id=1&CategorieId=<?php echo $article['id']; ?>" class="heart d-flex justify-content-center align-items-center " name="favs">
	    								Add to favorite
	    							</a>

                        </form>
                    
                    </div>
                </div>


	        <?php } ?>
            <br>

            </div>
</div>
