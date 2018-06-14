<?php 
	
	$nombre = 'itachi.jpg';
	$formato = array('jpg','jpeg','gif','png');
	$final = end(explode('.',$nombre));
	$hora = date('H:i:s').$final;

	if(in_array($final, $formato))
	{
		foreach($formato as $valor)
		{
			if($valor == $final)
			{
				echo "<br>coincidencia encontrada en el formato : ".$hora.$valor;
			}
			else{
				echo "<br>".$valor;

			}
		}
	}
	else{
		echo "Formato no encontrado !";
	}



 ?>