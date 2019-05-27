<?php
class UsuariosController extends ControllerBase
{
	public function agregar()
	{
		if($this->isAjax())
		{
			//Validar permisos de usuario
			//Validar datos 
			$response = array('success' => true);

			foreach ($_POST as $key => $value) {
				if(empty(trim($value)))
				{
					$response['success'] = false;
					$response['msg'] = 'Complete ' . $key; 
					break;
				}
			}	

			//Insertar datos
			if($response['success'])
			{
				$response['msg'] = '¡Registrado exitosamente!';
			}
			//Devolver respuesta json	
		
			echo json_encode($response);
		}
		
	}
}


?>