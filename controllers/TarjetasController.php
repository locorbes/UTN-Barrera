<?php

class TarjetasController extends ControllerBase
{
	public function asignar()
	{
		//Validar permisos
		if($this->isAjax())
		{

			$response = array('success' => false);
			//Validar DNI, longitud, tipo de dato
			//validar Tarjeta longitud, tipo de dato
			$c = array(['numero' => $_POST['dni'], 'longitud' => 8, 'campo' => 'dni'], 
					['numero' => $_POST['numero-tarjeta'], 'longitud' => 12, 'campo' => 'numero tarjeta']);
			
			$validacion = Validaciones::validarContenido($c);
			
			if($validacion['valido'])
			{
				$validacion = Validaciones::validarNumeroLongitud($c);
				
				//Validar existencia de dni

				if($validacion['valido'])
				{		
					//Cargar tarjeta
					//Vincular tarjeta con persona
					$response['success'] = true;
					$response['msg'] = 'Registrado con exito!';
				}else
				{
					$response['msg'] = $validacion['msg'];
				}

			}else
			{
				$response['msg'] = $validacion['msg'];
			}

			//Devolver mensaje
			
			echo json_encode($response);
		}
	}
}



?>