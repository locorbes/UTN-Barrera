<?php
class ControllerBase
{	
	public $conexion;
	public $adp; 

	public function __construct()
	{
		
	}

	public function view($view, $data)
	{	
		//require_once 'core/HelpView.php';
		$helper = new HelpView();
		require_once 'views/'.$view.'View.php';
	}

	public function conectar()
	{
		//$this->conexion = new Conectar();
		//$this->adp = $this->conexion->conexion();
	}

	public function redirect($controller = CONTROLADOR_DEFECTO, $action = ACCION_DEFECTO)
	{
		header("Location:". RUTA . $controller . "/" . $action);
	}

	function isAjax()
	{
	   return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
	   strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}

} 

?>