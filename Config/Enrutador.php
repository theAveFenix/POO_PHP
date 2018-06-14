<?php namespace Config;

class Enrutador
{
	public static function run(Request $request)
	{
		$controlador = $request->getControlador().'Controller';
		$ruta = ROOT.'Controllers'.DS.$controlador.'.php';
		$metodo = $request->getMetodo();
		$argumento = $request->getArgumento();
		
		if(is_readable($ruta))
		{
			require_once $ruta;

			$clase = 'Controllers\\'.$controlador;

			$controlador = new $clase;

			if(!$argumento)
			{
				$datos = call_user_func(array($controlador,$metodo));
			}
			else{
				$datos = call_user_func_array(array($controlador,$metodo),$argumento);
			}
		}

		$ruta = ROOT.'Views'.DS.$request->getControlador().DS.$metodo.'.php';

		if(is_readable($ruta))
		{
			require_once $ruta;
		}
		else{
			echo '<span style=color:red;font-family:sans-serif;>
					NO SE ENCONTRO LA RUTA : <b>'.$ruta.'</b></span>';
		}
		
	}
}

 ?>