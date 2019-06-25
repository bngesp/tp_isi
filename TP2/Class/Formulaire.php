<?php

/**
 * Une classe Formulaire pour la generation de formulaire en PHP 
 */
class Formulaire 
{
	const INPUT = "text";
	const SUBMIT = "submit";
	const RESET = "reset";
	const PASSWORD = "password";
	private $tag;

	public function __construct($tag='p')
	{
		$this->tag = $tag;
	}


	protected function cadre($html)
	{
		return "<".$this->tag.">".$html."</".$this->tag.">";
	}

	protected function getHtml($name, $type=self::INPUT)
	{
		if($type=="text" || $type == "password"){
			return "<label>".$name."</label>"."<input type=".$type." name=".$name.">";
		}else return "<button type=".$type." name=".$name.">".$name."</button>";
	}

	/**
	* input permet d'afficher un champ de texte dans le html
	*/
	
	public function input($name)
	{
		return $this->cadre($this->getHtml($name));
	}


	public function password($name)
	{
		return $this->cadre($this->getHtml($name, self::PASSWORD));
	}

	public function submit($name)
	{
		return $this->getHtml($name, self::SUBMIT);
	}

	public function reset($name)
	{
		return  $this->getHtml($name, self::RESET);
	}
}