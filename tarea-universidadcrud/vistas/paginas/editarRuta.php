<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
if (isset($_GET["codigo"])) {

	$item="codigo";

	$valor=$_GET["codigo"];

	$ruta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor, "rutas");
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

				<input type="text" class="form-control" value="<?php echo $ruta['codigo']; ?>" id="nombre" placeholder="Escriba el codigo" name="actualizarCodigo">

			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $ruta['descripcion']; ?>" id="email" placeholder="Escriba la descripcion" name="actualizarDescripcion">
			
			</div>
			
		</div>

		<?php 
					$actualizar = ControladorFormularios::ctrActualizarRegistroRuta();
						if ($actualizar == "ok") {
			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">La ruta ha sido actualizado</div>
			
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