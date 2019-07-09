<?php
include "Autoloader.php";

if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else $page = "home";

$inst = new \Application\DataBase\DataBase();

ob_start();
//include "Vue/".$page.".php";
if($page == "home"){
	//$contenu = "je suis le home";
	require 'Vue/home.php';
}elseif ($page == "commentaire") {
	//$contenu = "moi je suis commmentaire";
	require "Vue/commentaire.php";
}elseif ($page == "posts"){
    require "Vue/posts.php";
}

$contenu  = ob_get_clean();

require 'Vue/template/template.php';