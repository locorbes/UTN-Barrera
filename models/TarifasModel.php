<?php

class TarifasModel
{
	private $id;
	private $descripcion;
	private $tarifa;

	public function __construct($conexion)
	{	
		//$table = 'tarifas';
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

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setTarifa($tarifa)
	{
		$this->tarifa = $tarifa;
	}

	public function getTarifa()
	{
		return $this->tarifa;
	}


}
