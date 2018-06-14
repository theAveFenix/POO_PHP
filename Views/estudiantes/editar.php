<?php $secciones  = $estudiantes->listarSecciones(); ?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Editar al estudiante: <b><?php echo $datos['nombre'] ?></b>
		</h3>
		<div class="panel panel-body">
			<div class="col-md-3"></div>
			<div class="col-md-6 col-offset-3">
				<form action="" method="POST" role="form">
					<input type="hidden" name="id" value="<?php echo $datos['id'] ?>">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" placeholder="ingrese nombre" value="<?php echo $datos['nombre'] ?>">
					</div>

					<div class="form-group">
						<label for="edad">Edad</label>
						<input type="number" class="form-control" name="edad" placeholder="ingrese edad" value="<?php echo $datos['edad'] ?>">
					</div>

					<div class="form-group">
						<label for="promedio">Promedio</label>
						<input type="number" step="any" class="form-control" name="promedio" placeholder="ingrese promedio" value="<?php echo $datos['promedio'] ?>">
					</div>

					<div class="form-group">
						<label for="seccion">Seccion</label>
						<select name="id_seccion" class="form-control" required="required">
							<?php foreach($secciones as $seccion): ?>
							<option value="<?php echo $seccion['id'] ?>">
								<?php echo $seccion['nombre']; ?>
							</option>
							<?php endforeach; ?>
						</select>
					</div>

					<button type="submit" class="btn btn-primary">editar</button>
				</form>
			</div>
		</div>
	</div>
</div>