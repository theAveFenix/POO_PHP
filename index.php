<?php 
	
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(__DIR__).DS);
	define('URL','https://localhost/PRACTICA_2018/');

	require 'Config/Autoload.php';
	Config\Autoload::run();

	require 'Views/template/Layouts.php';

	Config\Enrutador::run(new Config\Request());



	
 ?>