<?php namespace Models;

class Seccion
{
	private $id;
	private $nombre;
	private $cn;

	public function __construct()
	{
		$this->cn = new Conexion();
	}

	public function set($atributo,$contenido)
	{
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function index()
	{
		$sql = "SELECT * from secciones";

		$datos = $this->cn->consultaRetorno($sql);

		return $datos;
	}

	public function add()
	{
		$sql = "INSERT into secciones (id,nombre) 
		values(null,'{$this->nombre}')";

		$this->cn->consultaSimple($sql);
	}

	public function edit()
	{
		$sql = "UPDATE secciones set nombre = '{$this->nombre}' 
		where id = '{$this->id}'";

		$this->cn->consultaSimple($sql);
	}

	public function delete()
	{
		$sql = "DELETE from secciones where id = '{$this->id}'";

		$this->cn->consultaSimple($sql);
	}

	public function show()
	{
		$sql = "SELECT * from secciones where id = '{$this->id}'";

		$datos = $this->cn->consultaRetorno($sql);

		$row = mysqli_fetch_assoc($datos);

		return $row;
	}
}

 ?>