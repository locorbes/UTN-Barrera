<?php

class PersonasModel
{
	private $id;
	private $nombre;
	private $apellido;
	private $saldo;
	private $estado;

	public function __construct($conexion)
	{	
		//$table = 'personas';
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

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->nombre;
	}


	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setSaldo($saldo)
	{
		$this->saldo = $saldo;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

	public function getEstado()
	{
		return $this->estado;
	}

	public function PersonaPorDni($dni)
	{
		$personas = array(['nombre' => 'Pato', 'apellido' => 'Gato', 'dni' => 12345678],
						['nombre' => 'Juan', 'apellido' => 'Garcia', 'dni' => 1234567]);

		foreach ($personas as $value) {
			if($value['dni'] == $dni)
			{
				return $value;
			}
		}

		return null;
	}

}
