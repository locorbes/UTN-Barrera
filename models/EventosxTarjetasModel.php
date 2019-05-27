<?php

class EventosxTarjetasModel
{
	private $id;
	private $idusuario;
	private $idtarjeta;
	private $fecha;

	public function __construct($conexion)
	{	
		//$table = 'eventosxtarjetas';
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

	public function setIdUsuario($idusuario)
	{
		$this->idusuario = $idusuario;
	}

	public function getIdUsuario()
	{
		return $this->idusuario;
	}


	public function setIdTarjeta($idtarjeta)
	{
		$this->idtarjeta = $idtarjeta;
	}

	public function getIdTarjeta()
	{
		return $this->idtarjeta;
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
