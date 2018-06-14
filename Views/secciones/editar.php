<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Editar: <?php echo $datos['nombre'] ?></h3>
	</div>
	<div class="panel-body">
		<div class="col-md-3"></div>
		<div class="col-md-6 col-offset-3">
			<form action="" method="POST" role="form">
				<input type="hidden" name="id" value="<?php echo $datos['id'] ?>">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" name="nombre" placeholder="ingrese seccion" required value="<?php echo $datos['nombre'] ?>">
				</div>
			
				<div class="form-group">
					<button type="submit" class="btn btn-success">
						editar
					</button>
				</div>
			</form>
		</div>
	</div>
</div>