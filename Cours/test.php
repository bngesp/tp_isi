<?php
	
// function __autoload($class_name)
// {
// 	$class_name = str_replace("\\", "/", $class_name);
// 	var_dump($class_name);
// 	require $class_name.".php";
// }	
include 'Autoload/Autoloader.php';

use Namespaces\User\Personne;
use Namespaces\DB\DataBase;

$user = new Personne("wade", "Massamba");
$bd = new DataBase();

var_dump($bd);

