<?php

/**
 * Autoloader classes
 */


class Autoloader
{
	
	public static function loader($class_name)
	{
		$class_name = str_replace("\\", "/", $class_name);
		//var_dump($class_name);
		require "./".$class_name.".php";
	}

	public static function register()
	{
		spl_autoload_register(array(__CLASS__, "loader"));
	}
}

Autoloader::register();