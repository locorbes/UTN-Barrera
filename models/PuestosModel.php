<?php

class PuestosModel
{
	private $id;
	private $puesto;

	public function __construct($conexion)
	{	
		//$table = 'puestos';
		//parent::__construct($table, $conexion);
	}


	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setPuesto($puesto)
	{
		$this->puesto = $puesto;
	}

	public function getPuesto()
	{
		return $this->puesto;
	}


}
