<?php


/**
 * Classe pour adapter le desgin de bootstrap 
 */
class FormBootstrap extends Formulaire
{
	
	function __construct($tag="div")
	{
		parent::__construct($tag);
	}

	public function getHtml($name, $type=self::INPUT)
	{
		if($type=="text" || $type == "password"){
			return "<label class=\"form-label\">".$name."</label>"."<input type=".$type." name=".$name." class=\"form-control\">";
		}else return "<button class=\"btn btn-primary\" type=".$type." name=".$name.">".$name."</button>";
	}
}