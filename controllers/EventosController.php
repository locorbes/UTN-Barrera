<?php
class EventosController extends ControllerBase
{
	public function cargarEventos()
	{
		if($this->isAjax())
		{
			$repetir = 2000;
			$data['data'] = array();

			for($i=0; $i < $repetir; $i++)
			{
				$evento = ($i % 2 == 0) ? 'INGRESO' : 'EGRESO'; 
				$hora = ($i % 2 == 0) ? '12:45' : rand(0, 23) . ':0' . rand(0,9);

				$data['data'][$i] = array('tarjeta' => 1209381 + rand(1, 20), 'dni' => 23331212 . rand(0,9),
				'nombre' => 'Otto Franz',	'categoria' => 'Estudiante', 'subcategoria' => 'Ingenieria',
				'fecha' => rand(0,30) . '-20-2020' , 'hora' => $hora, 'evento' => $evento);
			}

			echo(json_encode($data));
		}
		
	}

	public function cargarIngresos()
	{
		if($this->isAjax())
		{
			$repetir = 15;
			$data['data'] = array();

			for($i=0; $i < $repetir; $i++)
			{
				$data['data'][$i] = array('tarjeta' => 1209381 + rand(1, 20), 'dni' => 23331212 . rand(0,9),
				'nombre' => 'Otto Franz',	'categoria' => 'Estudiante', 'subcategoria' => 'Ingenieria',
				'fecha' => rand(0,30) . '-20-2020' , 'hora' => rand(0,24), 'evento' => 'INGRESO');
			}

			echo(json_encode($data));
		}
	}

	public function cargarEgresos()
	{
		if($this->isAjax())
		{
			$repetir = 15;
			$data['data'] = array();

			for($i=0; $i < $repetir; $i++)
			{
				$data['data'][$i] = array('tarjeta' => 1209381 + rand(1, 20), 'dni' => 23331212 . rand(0,9),
				'nombre' => 'Otto Franz',	'categoria' => 'Estudiante', 'subcategoria' => 'Ingenieria',
				'fecha' => rand(0,30) . '-20-2020' , 'hora' => rand(0,24), 'evento' => 'EGRESO');
			}

			echo(json_encode($data));
		}
	}
					 

}
?>