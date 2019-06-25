<?php


function getDB()
{
	$bd = null;
	try {
		$bd =  new PDO("mysql:dbname=tp_php;host=127.0.0.1", "root", "root");
	} catch (Exception $e) {
		echo $e;
	}
	return $bd;
}

function verifieUser($login, $mdp)
{
	$bd = getDB();
	$return = false;
	if(!is_null($bd)){
		$sql = "SELECT * from users where login=:login and password=:password";
		$element = $bd->prepare($sql);
		$element->execute(array(
			":login" => $login,
			":password" => $mdp
		));
		$result = $element->fetch(PDO::FETCH_ASSOC);
		$nb_ligne = $element->rowCount();

		if($nb_ligne>0) {
			session_start();
			$_SESSION["CURRENT_USER"] = $result;
			$return=true; 
		}
	}

	return $return;

}

function saveUser($nom, $prenom, $mail, $login, $mdp)
{
	$bd = getDB();
	$result = false;
	if(!is_null($bd)){
	
		$sql = "INSERT into users(nom, prenom, email, login, password) VALUES(:nom, :prenom, :email, :login, :password)";

		$element = $bd->prepare($sql);	
		$result = $element->execute(array(
			":nom" => $nom,
			":prenom" => $prenom,
			":email" => $mail,
			":login" => $login,
			":password" => $mdp,
		));
	}

	return $result;
}

function getAllUSer()
{
	$bd = getDB();
	$alluser = null;
	if(!is_null($bd)){
		$sql = "SELECT * from users";
		$element = $bd->query($sql);

		$alluser = $element->fetchAll(PDO::FETCH_ASSOC);
	}
	return $alluser;
	
}

function validerUser($id)
{
	$bd = getDB();
	if (!is_null($bd)) {
		$req = "UPDATE users set statut=true where id=?";
		$el = $bd->prepare($req);
		$el->execute(array($id));
	}
}










