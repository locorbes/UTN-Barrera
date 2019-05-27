<?php
spl_autoload_register(function($class){

	if(is_file("core/$class.php"))
	{
		require_once "core/$class.php";

	}else if(is_file("controllers/$class.php"))
	{
		require_once "controllers/$class.php";
	
	}else if(is_file("models/$class.php"))
	{
		require_once "models/$class.php";
	}
	else
	{	
	    throw new Exception("Controlador no existe");
	}
});


