<?php

class SalidasModel
{
	private $id;
	private $idpuesto;
	private $dni;
	private $fecha;

	public function __construct($conexion)
	{	
		//$table = 'salidas';
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

	public function setIdPuesto($idpuesto)
	{
		$this->idpuesto = $idpuesto;
	}

	public function getIdPuesto()
	{
		return $this->idpuesto;
	}


	public function setDni($dni)
	{
		$this->dni = $dni;
	}

	public function getDni()
	{
		return $this->dni;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

}
