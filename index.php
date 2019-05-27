<?php
//error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');

	require_once 'core/autoload.php';
	
	$router = new Router(); 
	
	$controlador = $router->getController();
	$method = $router->getMethod();
	  
	$controlador = ucwords($controlador) . "Controller";
	
	try
	{
		$controller = new $controlador();

		if(method_exists($controller, $method))
		{
			$controller->$method();
		}else
		{	
			throw new Exception('Metodo no existente', 1);	
		}

	}catch(Exception $e)
	{
		//Manejarlo de otra forma
		include_once('views/notFoundView.php');
	}
	
?>
