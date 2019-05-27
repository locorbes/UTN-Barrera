<?php

class PersonaxRelacionxSectorModel
{
	private $id;
	private $dni;
	private $idrelacion;
	private $idsector;

	public function __construct($conexion)
	{	
		//$table = 'personaxrelacionxsector';
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


	public function setIdRelacion($idrelacion)
	{
		$this->idrelacion = $idrelacion;
	}

	public function getIdRelacion()
	{
		return $this->idrelacion;
	}

	public function setIdSector($idsector)
	{
		$this->idsector = $idsector;
	}

	public function getIdSector()
	{
		return $this->idsector;
	}


}
