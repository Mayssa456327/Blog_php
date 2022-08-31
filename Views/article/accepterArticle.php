<?php
	include '../../Controller/ArticleC.php';
	$ArticleC=new ArticleC();
	$ArticleC->accepterArticle($_GET["id"]);
	header('Location:afficherArticleBack.php');
?>