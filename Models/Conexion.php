<?php namespace Models;

error_reporting(0);

class Conexion
{
	private $datos = array(
		'host'  =>   'localhost',
		'user'  =>   'root',
		'pass'  =>   'juliosantos92',
		'db'	=>	 'escuela'
	);

	private $cn;

	public function __construct()
	{
		$this->cn = new \mysqli($this->datos['host'],$this->datos['user'],
		$this->datos['pass'],$this->datos['db']);

		if($this->cn->connect_error)
		{
			echo '<span style="color:red;font-family:sans-serif">Error de conexion: '.$this->cn->connect_errno.' - '.$this->cn->connect_error.'</span>';
		}

	}

	public function consultaSimple($sql)
	{
		$this->cn->query($sql);
	}

	public function consultaRetorno($sql)
	{
		$datos = $this->cn->query($sql);

		return $datos;
	}
}


 ?>