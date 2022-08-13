<?php
include '../headerFront.php'; 

include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();
$listeArticle=$articleC->afficherArticle(); 

if(isset($_POST["titre"])){
    $listeArticle=$ArticleC->recherche($_POST["titre"],$_POST["description"]); 
  }


?>
<form action=""  method="POST">
                      <input type="text" name="titre" placeholder="titre">
                      <input type="text" name="description" placeholder="description">
                      <input type="submit" href="afficherArticleFront.php" name="recherche" value="Recherche"/>
                 </form>

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
                    </div>
                </div>


	        <?php } ?>
            <br>

            </div>
</div>
