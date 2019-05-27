<?php

class RecibosModel
{
	private $id;
	private $dni;
	private $idusuario;
	private $fecha;
	private $total;

	public function __construct($conexion)
	{	
		//$table = 'recibos';
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

	public function setDni($dni)
	{
		$this->dni = $dni;
	}

	public function getDni()
	{
		return $this->dni;
	}


	public function setIdUsuario($idusuario)
	{
		$this->idusuario = $idusuario;
	}

	public function getIdUsuario()
	{
		return $this->idusuario;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setTotal($total)
	{
		$this->total = $total;
	}

	public function getTotal()
	{
		return $this->total;
	}


}
