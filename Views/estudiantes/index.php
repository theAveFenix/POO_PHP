
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Listar Estudiantes</h3>
		<div class="panel-body">
			<div class="col-md-1"></div>
			<div class="col-md-10 col-offset-1">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>EDAD</th>
							<th>PROMEDIO</th>
							<th>SECCION</th>
							<th>FOTO</th>
							<th>REGISTRADO</th>
							<th>ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($datos as $row): ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['edad']; ?></td>
							<td><?php echo $row['promedio']; ?></td>
							<td><?php echo $row['seccion']; ?></td>
							<td>
								<img class='imagen' src="<?php URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>">
							</td>
							<td><?php echo $row['fecha']; ?></td>
							<td>
								<a href="<?php echo URL; ?>estudiantes/editar/<?php echo $row['id'] ?>" 
									class="btn btn-warning">
									editar
								</a>

								<a href="<?php echo URL; ?>estudiantes/eliminar/<?php echo $row['id'] ?>"
									class="btn btn-danger" onclick='return confirm("seguro de eliminar estudiante ?");'>
									eliminar
								</a>

								<a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id'] ?>" 
									class="btn btn-success">
									detalles
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
			</table>
			</div>
		</div>
	</div>
</div>