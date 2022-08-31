<?php
	include '../../Controller/CommentaireC.php';
	$commentaireC=new CommentaireC();
	$commentaireC->supprimerCommentaire($_GET["id"]);
	header('Location:afficherCommentaireBack.php');
?>