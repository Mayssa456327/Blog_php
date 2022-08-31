<?php
include '../headerBack.php'; 
include '../../Model/Article.php';
include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();
$listeArticle=$articleC->afficherArticle(); 
if(isset($_POST["titre"])){
    $listeArticle=$articleC->recherche($_POST["titre"],$_POST["description"]); 
  }


?>



        <div class="page-wrapper" style="min-height: 250px; margin-left:20%">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                   
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            
<div class="row" style="">
                    <div class="">
                        <div class="white-box">
                            
                        <form action=""  method="POST">
                      <input type="text" name="titre" placeholder="titre">
                      <input type="text" name="description" placeholder="description">
                      <input type="submit" href="afficherArticleFront.php" name="recherche" value="Recherche"/>
                 </form>
                           
<div class="row" style="">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#id</th>
                                            <th class="border-top-0">Titre</th>
                                            <th class="border-top-0">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
			    foreach($listeArticle as $article){
			?>
                                        <tr>
                                            <td><?php echo $article['id']; ?></td>
                                            <td><?php echo $article['titre']; ?></td>
                                            <td><?php echo $article['description']; ?></td>
                                            <td>     
                                            <form method="POST" action="modifierArticleBack.php">
						<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?php echo $article['id']; ?> name="id">
					</form>

                </td>

              <td>  <a href="accepterArticle.php?id=<?php echo $article['id']; ?>"  class="btn btn-primary btn-block text-uppercase sm-1" >Accepter</a></td>
                <td>
				<a href="supprimerArticleBack.php?id=<?php echo $article['id' ]; ?>"  class="btn btn-primary btn-block text-uppercase sm-1" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
            
                    </td>
                                        </tr>


	        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
</div>
                
                    </td>
                 </tr>
	 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
</div>
 
                        </div>
                    </div>
                </div>
                </a>

</div>
</div>


<br>
          
        </div>
    </div>

</body>

</html>
