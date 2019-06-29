<?php
namespace Cours\Classe\User;

/**
 * Classe Personne
 */


class Personne
{
	private $nom;
	private $prenom;

	
	function __construct($nom, $prenom){
		$this->nom = $nom;
		$this->prenom = $prenom;

	}

	public function getNom()
	{
		return $this->nom;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}

	public function setNom($nom)
	{
		$this->nom = $nom;
		//return $this;
	}	

	public function setPrenom($nom)
	{
		$this->prenom = $nom;
		//return $this;
	}

}