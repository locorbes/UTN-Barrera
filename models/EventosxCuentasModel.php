<?php

class EventosxCuentasModel
{
	private $id;
	private $idusuario;
	private $descripcion;
	private $fecha;

	public function __construct($conexion)
	{	
		//$table = 'eventosxcuentas';
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


	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getdescripcion()
	{
		return $this->descripcion;
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
