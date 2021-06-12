<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
$buses = ControladorFormularios::ctrSeleccionarRegistros(null,null,"buses");
 ?>
<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<label for="email">Cedula:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" name="cedulaChofer">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Nombre:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" name="nombreChofer">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Apellido:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" name="apellidoChofer">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Edad:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="number" class="form-control" name="edadChofer">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Direccion:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control"   name="direccionChofer">
			
			</div>
			
		</div>

		<?php

		$registroBus = ControladorFormularios::ctrIngresoChofer();

		?>
		
		<button type="submit" class="btn btn-primary">Ingresar</button>

	</form>

</div>

<div>
	
</div>