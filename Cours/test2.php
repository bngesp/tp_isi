<?php 
// function __autoload($name)
// {
//    include $name.'.php';
// }
include 'DataBaseConstante.php';
include 'DataBase.php';

use Cours\DB\DataBaseConstante;
use Cours\DB\DataBase;

$database = new DataBase();
$db = $database->getDB();

echo json_encode($database->getAll("users"));