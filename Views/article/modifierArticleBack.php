<?php
include '../headerBack.php';
include '..\..\Controller\ArticleC.php';
include_once '../../Model/article.php';
$ArticleC = new ArticleC();

$error = '';

// create adherent
$article = null;

if (isset($_POST['titre']) && isset($_POST['description']))
 {
    if (!empty($_POST['titre']) && !empty($_POST['description'])) {
        $article = new article($_POST['titre'], $_POST['description']);
        $ArticleC->modifierArticle($article, $_POST["id"]);

    } else {
        $error = 'Missing information';
    }
}
?>
<div class="row" style="margin-left:20%">
<?php
			if (isset($_POST['id'])){
				$article = $ArticleC->recupererArticle($_POST['id']);
				
		?>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Modifier Article</h1>
                            </div>
                            <form class="article"  method="POST" action="" >
                            <input type="text" style="color :transparent ; background:transparent ; border-color:transparent"  name="id" id="id" class="form-control validate" value="<?php echo $article['id']; ?>" maxlength="20">
                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Titre : <br>
                                        <input type="text" name="titre" class="form-control form-control-article" id="exampleFirstName"
                                        value="<?php echo $article['titre']; ?>">
                                    </div>
                                
                                </div>
                                <div class="form-group">
                                    <br>
                                   Description
                                    <input name=" description" class="form-control form-control-article" id="exampleInputEmail"
                                    value="<?php echo $article['description']; ?>"> </input>
                                </div>

                    
                             
                               <input type="submit" href="afficherArticleBack.php" class="btn btn-primary btn-article btn-block" value="Modifier" ></input>
                            </form>
                            <hr>
                            
                        </div>
                    </div>

                    <?php
		}
		?>
                </div>
            </div>