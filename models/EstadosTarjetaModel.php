<?php

class EstadosTarjetaModel
{
	private $id;
	private $estado;

	public function __construct($conexion)
	{	
		//$table = 'estadostarjeta';
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

	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

	public function getEstado()
	{
		return $this->estado;
	}


}
