<?php
	include '../../Controller/ArticleC.php';
	$articleC=new ArticleC();
	$articleC->supprimerArticle($_GET["id"]);
	header('Location:afficherArticleBack.php');
?>