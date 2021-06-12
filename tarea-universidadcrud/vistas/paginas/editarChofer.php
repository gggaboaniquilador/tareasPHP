<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
if (isset($_GET["cedula"])) {

	$item="cedula";

	$valor=$_GET["cedula"];

	$chofer = ControladorFormularios::ctrSeleccionarRegistros($item, $valor, "choferes");
} ?>

<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $chofer['cedula']; ?>" id="nombre" placeholder="Escriba la cedula" name="actualizarCedula">

			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $chofer['nombre']; ?>" id="email" placeholder="Escriba la nombre" name="actualizarNombre">
			
			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="text" class="form-control" placeholder="escriba el apellido" name="actualizarApellido" value="<?php echo $chofer['apellido'] ?>">
			</div>

		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="number" class="form-control" placeholder="escriba la edad" name="actualizarEdad" value="<?php echo $chofer['edad'] ?>">
			</div>

		</div>
		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="text" class="form-control" placeholder="escriba la direccion" name="actualizarDireccion" value="<?php echo $chofer['direccion'] ?>">
			</div>

		</div>

		<?php 
					$actualizar = ControladorFormularios::ctrActualizarRegistroChofer();
						if ($actualizar == "ok") {
			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El chofer ha sido actualizado</div>
			
			<script>

				setTimeout(function(){

					window.location = "../../index.php";
					

					},3000)
			</script>


			';
	}
		?>
		
		<button type="submit" class="btn btn-primary">Actualizar</button>			
	</form>

</div>