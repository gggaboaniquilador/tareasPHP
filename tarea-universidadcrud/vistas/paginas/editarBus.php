<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
if (isset($_GET["placa"])) {

	$item="placa";

	$valor=$_GET["placa"];

	$bus = ControladorFormularios::ctrSeleccionarRegistros($item, $valor, "buses");
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

				<input type="text" class="form-control" value="<?php echo $bus['placa']; ?>" id="nombre" placeholder="Escriba la placa" name="actualizarPlaca">

			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $bus['marca']; ?>" id="email" placeholder="Escriba la marca" name="actualizarMarca">
			
			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="text" class="form-control" placeholder="escriba el modelo" name="actualizarModelo" value="<?php echo $bus['modelo'] ?>">
			</div>

		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="date" class="form-control" placeholder="Escriba su contraseña" name="actualizarFecha" value="<?php echo $bus['fecha'] ?>">
			</div>

		</div>

		<?php 
					$actualizar = ControladorFormularios::ctrActualizarRegistro();
						if ($actualizar == "ok") {
			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El Bus ha sido actualizado</div>
			
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