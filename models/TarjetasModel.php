<?php

class TarjetasModel
{
	private $id;
	private $idestado;
	private $idusuario;

	public function __construct($conexion)
	{	
		//$table = 'tarjetas';
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

	public function setIdEstado($idestado)
	{
		$this->idestado = $idestado;
	}

	public function getIdEstado()
	{
		return $this->idestado;
	}

	public function setIdUsuario($idusuario)
	{
		$this->idusuario = $idusuario;
	}

	public function getIdUsuario()
	{
		return $this->idusuario;
	}


}
