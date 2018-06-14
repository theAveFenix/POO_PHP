<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Listar Secciones</h3>
	</div>
	<div class="panel-body">
		<div class="col-md-3"></div>
		<div class="col-md-6 col-offset-3">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE DE LA SECCION</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($datos as $dato): ?>
					<tr>
						<td><?php echo $dato['id']; ?></td>
						<td><?php echo $dato['nombre']; ?></td>
						<td>
							<div class="text-center">
								<a href="<?php echo URL; ?>secciones/editar/<?php echo $dato['id']; ?>" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil"></span>
								</a>
								<a href="<?php echo URL; ?>secciones/eliminar/<?php echo $dato['id']; ?>" class="btn btn-danger" onclick='return confirm("seguro de eliminar seccion ?");'>
									<span class="glyphicon glyphicon-remove-circle"></span>
								</a>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>