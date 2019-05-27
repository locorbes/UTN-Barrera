<?php

class TiposModel
{
	private $id;
	private $idtipo;

	public function __construct($conexion)
	{	
		//$table = 'tipos';
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
  
}
