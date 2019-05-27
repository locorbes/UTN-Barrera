<?php

class UsuariosModel
{
	private $id;
	private $idtipo;
	private $clave;
	private $email;
	private $estado;

	public function __construct($conexion)
	{	
		//$table = 'usuarios';
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

	public function setIdTipo($idtipo)
	{
		$this->idtipo = $idtipo;
	}

	public function getIdTipo()
	{
		return $this->idtipo;
	}


	public function setClave($clave)
	{
		$this->clave = $clave;
	}

	public function getClave()
	{
		return $this->clave;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
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
