<?php namespace Views\template;

$template = new Layouts();

class Layouts
{
	public function __construct()
	{
 ?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administracion de Estudiantes</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default nav" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Administracion de Estudiantes</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo URL; ?>">inicio</a></li>
				<li><a href="<?php echo URL; ?>">estudiantes</a></li>
				<li><a href="<?php echo URL; ?>secciones">secciones</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo URL; ?>estudiantes/registrar">registrar estudiante</a></li>
				<li><a href="<?php echo URL; ?>secciones/registrar">registrar seccion</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">iniciar sesion<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<section class="seccion">
	<div class="container">
		<div class="row">
			
						
					

 <?php		
	}

	public function __destruct()
	{
 ?>
 					
		</div>
	</div>

</section>

	<script src="<?php echo URL; ?>Views/template/js/jquery.min.js"></script>
	<script src="<?php echo URL; ?>Views/template/js/bootstrap.min.js"></script>
	</body>
	</html>
 <?php
	}
}

?>