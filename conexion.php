<?php

class conexion
{
	private $datos = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'db' => 'registro_user'

	);
	private $con;

	public function __construct()
	{
		$this->con = new mysqli(
                        $this->datos['host'],
			$this->datos['user'],
			$this->datos['pass'],
			$this->datos['db']);
	}
	public function noRetorno($sql)
	{
		$this->con->query($sql);
	}
	public function Retorno($sql)
	{
		$datos = $this->con->query($sql);
		return $datos;
	}
}

