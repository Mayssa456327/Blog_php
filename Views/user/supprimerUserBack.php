<?php
	include '../../Controller/UserC.php';
	$userC=new UserC();
	$userC->supprimerUtilisateur($_GET["id"]);
	header('Location:afficherUserBack.php');
?>