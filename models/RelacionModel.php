<?php

class RelacionModel
{
	private $id;
	private $relacion;

	public function __construct($conexion)
	{	
		//$table = 'relacion';
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

	public function setRelacion($relacion)
	{
		$this->relacion = $relacion;
	}

	public function getRelacion()
	{
		return $this->relacion;
	}


}
