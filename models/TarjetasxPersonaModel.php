<?php

class TarjetasxPersonaModel
{
	private $id;
	private $idtarjeta;
	private $dni;
	private $estado;

	public function __construct($conexion)
	{	
		//$table = 'tarjetasxpersona';
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

	public function setIdTarjeta($idtarjeta)
	{
		$this->idtarjeta = $idtarjeta;
	}

	public function getIdTarjeta()
	{
		return $this->idtarjeta;
	}


	public function setDni($dni)
	{
		$this->dni = $dni;
	}

	public function getDni()
	{
		return $this->dni;
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
