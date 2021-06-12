<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
$buses = ControladorFormularios::ctrSeleccionarRegistros(null,null,"buses");
 ?>
<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<label for="email">Placa:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="email" name="placaBus">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Marca:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="email" name="marcaBus">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Modelo:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="email" name="modeloBus">
			
			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Año:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="date" class="form-control" id="email" name="añoBus">
			
			</div>
			
		</div>

		<?php

		$registroBus = ControladorFormularios::ctrIngresoBus();

		?>
		
		<button type="submit" class="btn btn-primary">Ingresar</button>

	</form>

</div>

<div>
	
</div>