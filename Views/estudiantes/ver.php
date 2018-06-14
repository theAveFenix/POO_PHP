<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Detalles del Estudiante: <?php echo strtoupper($datos['nombre']) ?></h3>
	</div>
	<div class="panel-body">
		<div class="col-md-2"></div>
		<div class="col-md-8 col-offset-2">
			<table class="table table-bordered table-hover border-success">
				<thead class="">
					<tr>
						<th colspan="2" class="text-center">Datos del Estudiante</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="5" width="200" height="250" > 
							<img  src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen'] ?>" class="imagen2">
						</td>
					</tr>
					<tr>
						<td>
							<ul class="list-group">
								<li class="list-group-item"><b>Codigo:</b> <?php echo $datos['id'] ?></li>
								<li class="list-group-item"><b>Nombre:</b> <?php echo $datos['nombre'] ?></li>
								<li class="list-group-item"><b>Edad:</b> <?php echo $datos['edad'] ?></li>
								<li class="list-group-item"><b>Promedio:</b> <?php echo $datos['promedio'] ?></li>
								<li class="list-group-item"><b>Seccion:</b> <?php echo $datos['seccion'] ?></li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>