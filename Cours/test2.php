<?php 
function __autoload($name)
{
   include $name.'.php';
}

$database = new DataBase();
$db = $database->getDB();

echo json_encode($database->getAll("article"));