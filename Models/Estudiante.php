<?php namespace Models;

class Estudiante
{
	private $id;
	private $nombre;
	private $edad;
	private $promedio;
	private $id_seccion;
	private $imagen;
	private $fecha;
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
		$sql = "SELECT e.*,s.nombre as seccion from estudiantes e 
		inner join secciones s on e.id_seccion = s.id";

		$datos = $this->cn->consultaRetorno($sql);

		return $datos;
	}

	public function add()
	{
		$sql = "INSERT into estudiantes (id,nombre,edad,promedio,id_seccion,
		imagen,fecha) values(null,'{$this->nombre}','{$this->edad}',
		'{$this->promedio}','{$this->id_seccion}','{$this->imagen}',NOW())";

		$this->cn->consultaSimple($sql);
	}

	public function edit()
	{
		$sql = "UPDATE estudiantes set nombre = '{$this->nombre}',edad = 
		'{$this->edad}',promedio = '{$this->promedio}',id_seccion = 
		'{$this->id_seccion}' where id='{$this->id}'";

		$this->cn->consultaSimple($sql);
	}

	public function show()
	{
		$sql = "SELECT e.*,s.nombre as seccion from estudiantes e inner join 
		secciones s on e.id_seccion = s.id where e.id = '{$this->id}'";

		$datos = $this->cn->consultaRetorno($sql);

		$row = mysqli_fetch_assoc($datos);

		return $row;
	}

	public function delete()
	{
		$sql = "DELETE from estudiantes where id = '{$this->id}'";

		$this->cn->consultaSimple($sql);
	}
}


 ?>