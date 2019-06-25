<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test Form</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php 
		//include 'Formulaire.php';
		//include 'FormBootstrap.php';

		function __autoload($clas_name)
		{
			var_dump($clas_name);
			include "Class/".$clas_name.".php";
		}


		$form = new Formulaire();
	?>
	<form action="">
		<?= $form->input("login");?>
		<?= $form->password("mdp");?>
		<?= $form->submit("Connexion");?>
		<?= $form->reset("Inscription");?>
	</form>
</body>
</html>