<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">
			Registrar Estudiante
		</h3>
		<div class="panel panel-body">
			<div class="col-md-3"></div>
			<div class="col-md-6 col-offset-3">
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" placeholder="ingrese nombre" required>
					</div>

					<div class="form-group">
						<label for="edad">Edad</label>
						<input type="number" class="form-control" name="edad" placeholder="ingrese edad" required>
					</div>

					<div class="form-group">
						<label for="promedio">Promedio</label>
						<input type="number" step="any" class="form-control" name="promedio" placeholder="ingrese promedio" required>
					</div>

					<div class="form-group">
						<label for="seccion">Seccion</label>
						<select name="seccion" class="form-control" required="required">
							<?php foreach($datos as $dato): ?>
							<option value="<?php echo $dato['id'] ?>"><?php echo $dato['nombre']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label for="imagen">Foto</label>
						<input type="file" name="imagen" class="form-control" required>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">registrar</button>
					</div>		
				
				</form>
			</div>
		</div>
	</div>
</div>