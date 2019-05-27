<?php

class SectoresModel
{
	private $id;
	private $sector;

	public function __construct($conexion)
	{	
		//$table = 'sectores';
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

	public function setSector($sector)
	{
		$this->sector = $sector;
	}

	public function getSector()
	{
		return $this->sector;
	}


}
