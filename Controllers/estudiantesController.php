<?php namespace Controllers;
 
 use Models\Estudiante as Estudiante;
 use Models\Seccion as Seccion;

 class estudiantesController
 {
 	private $estudiante;
 	private $seccion;

 	public function __construct()
 	{
 		$this->estudiante = new Estudiante();
 		$this->seccion = new Seccion();
 	}

 	public function index()
 	{
 		$datos = $this->estudiante->index();

 		return $datos;
 	}

 	public function editar($id)
 	{
		if(!$_POST)
		{
			$this->estudiante->set('id',$id);
			$datos = $this->estudiante->show();
			return $datos;
		}
		else{

			$this->estudiante->set('id',$_POST['id']);
			$this->estudiante->set('nombre',$_POST['nombre']);
			$this->estudiante->set('edad',$_POST['edad']);
			$this->estudiante->set('promedio',$_POST['promedio']);
			$this->estudiante->set('id_seccion',$_POST['id_seccion']);
			$this->estudiante->edit();

			header('Location: '.URL.'estudiantes');
		}
 	}

 	public function listarSecciones()
 	{
 		$secciones = $this->seccion->index();
 		return $secciones;

 	}

 	public function registrar()
 	{
 		if(!$_POST)
 		{	
 			$datos = $this->seccion->index();
 			return $datos;
 		}
 		else{

 			$imagen = date('his').$_FILES['imagen']['name'];
 			$formato = array('jpg','jpeg','gif','png');
 			$final = end(explode('.',$imagen));
 			$size = 700;

 			if(in_array($final,$formato) && $_FILES['imagen']['size'] <= $size*1024)
 			{
 				$ruta = ROOT.'Views'.DS.'template'.DS.'imagenes'.DS.'avatars'.DS.$imagen;

 				$tmp = $_FILES['imagen']['tmp_name'];
 				move_uploaded_file($tmp, $ruta);
 				//chmod($ruta, 0666);
 			}
 			else{
 				echo "<span style='color:red;font-family:sans-serif;'>
 				ERROR:<b>".$_FILES['imagen']['error']."</b></span>";
 			}

 			$this->estudiante->set('nombre',$_POST['nombre']);
 			$this->estudiante->set('edad',$_POST['edad']);
 			$this->estudiante->set('promedio',$_POST['promedio']);
 			$this->estudiante->set('id_seccion',$_POST['seccion']);
 			$this->estudiante->set('imagen',$imagen);

 			$this->estudiante->add();

 			header('Location: '.URL.'estudiantes');
 		}
 	}

 	public function eliminar($id)
 	{
 		$this->estudiante->set('id',$id);
 		$this->estudiante->delete();

 		header('Location: '.URL.'estudiantes');
 	}

 	public function ver($id)
 	{
 		$this->estudiante->set('id',$id);
 		$datos = $this->estudiante->show();
 		return $datos;
 	}

 }

 $estudiantes = new estudiantesController();



 ?>