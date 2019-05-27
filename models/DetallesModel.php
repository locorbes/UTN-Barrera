<?php

class DetallesModel
{
	private $id;
	private $idrecibo;
	private $idtarifa;

	public function __construct($conexion)
	{	
		//$table = 'detalles';
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

	public function setIdRecibo($idrecibo)
	{
		$this->idrecibo = $idrecibo;
	}

	public function getIdRecibo()
	{
		return $this->idrecibo;
	}

	public function setIdTarifa($idtarifa)
	{
		$this->idtarifa = $idtarifa;
	}

	public function getIdTarifa()
	{
		return $this->idtarifa;
	}


}
