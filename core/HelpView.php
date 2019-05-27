<?php
include_once 'config/global.php';

class HelpView
{
	public function url($controller = CONTROLADOR_DEFECTO, $action = ACCION_DEFECTO)
	{
		$url = RUTA . $controller . '/' . $action;
		return $url;
	}

	public function content($src)
	{
		$url = RUTA . $src;
		return $url;
	}
}

?>