<?php namespace Config;

class Request
{
	private $controlador;
	private $metodo;
	private $argumento;

	public function __construct()
	{
		if(isset($_GET['url']))
		{
			$url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
			$url = explode('/',$url);
			$url = array_filter($url);

			$this->controlador = strtolower(array_shift($url));
			$this->metodo = strtolower(array_shift($url));

			if(!$this->metodo)
			{
				$this->metodo = 'index';
			}
			$this->argumento = $url;
		}
		else{
			$this->controlador = 'estudiantes';
			$this->metodo = 'index';
		}
	}

	public function getControlador()
	{
		return $this->controlador; 
	}

	public function getMetodo()
	{
		return $this->metodo;
	}

	public function getArgumento()
	{
		return $this->argumento;
	}
}


 ?>