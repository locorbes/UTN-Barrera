<?php
class Validaciones
{
	//El array debe tener forma ['numero' => , 'longitud' => , 'campo' => ];
	public static function validarNumeroLongitud($array, $msg='Formato invalido ')
	{
		$r = array('valido' => true);

		foreach ($array as $value) {
			if(is_numeric($value['numero']))
			{
				if(strlen($value['numero']) != $value['longitud'])
				{
					$r['valido'] = false;
					$r['msg'] = $msg . $value['campo'];
					break;
				}
			}else
			{
				$r['valido'] = false;
				$r['msg'] = $msg . $value['campo'];
				break;
			}
		}

		return $r;
	}

	
	public static function validarContenido($array, $msg = 'Complete ')
	{
		$r = array('valido' => true);
	
		foreach ($array as $value) {
			
			if(empty(trim($value['numero'])))
			{
				$r['valido'] = false;
				$r['msg'] = $msg . $value['campo'];
				break;
			}
		}

		return $r;
	}

}

?>