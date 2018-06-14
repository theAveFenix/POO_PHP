<?php namespace Config;
	
class Autoload
{
	public static function run()
	{
		spl_autoload_register(function($clase){
			
			$ruta = str_replace('\\', '/', $clase).'.php';
			
			if(is_readable($ruta))
			{
				include $ruta;
			}
			else{
				echo "<span style='color:red;font-family:sans-serif;'>
				La ruta ".$ruta." no existe !</span>";
			}
		});
	}
}

 ?>