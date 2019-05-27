<?php 
class PersonasController
{
	public function personaPorDni()
	{	
		sleep(1);
		if(!empty(trim($_POST['dni'])))
		{
			if(is_numeric($_POST['dni']))
			{
				$Personas = new PersonasModel('conexion');
				$persona = $Personas->PersonaPorDni($_POST['dni']);
				echo json_encode($persona);
			}
		}
	}
}

?>