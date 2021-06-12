<?php

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrIngresoBus(){
		if(isset($_POST["placaBus"])){

			$tabla="buses";

			$datos=array("placa"=>$_POST["placaBus"],
				"marca"=>$_POST["marcaBus"],
				"modelo"=>$_POST["modeloBus"],
				"año"=>$_POST["añoBus"]);

			$respuesta = ModeloFormularios::mdlIngresoBus($tabla, $datos);

		return $respuesta;
		}
	}

	static public function ctrIngresoRuta(){
		if(isset($_POST["codigoRuta"])){

			$tabla="rutas";

			$datos=array("codigo"=>$_POST["codigoRuta"],
				"descripcion"=>$_POST["descripcionRuta"]);

			$respuesta = ModeloFormularios::mdlIngresoRuta($tabla, $datos);

		return $respuesta;
		}
	}
	static public function ctrIngresoChofer(){
		if(isset($_POST["cedulaChofer"])){

			$tabla="choferes";

			$datos=array("cedula"=>$_POST["cedulaChofer"],
				"nombre"=>$_POST["nombreChofer"],
			    "apellido"=>$_POST["apellidoChofer"],
				"edad"=>$_POST["edadChofer"],
				"direccion"=>$_POST["direccionChofer"],);

			$respuesta = ModeloFormularios::mdlIngresoChofer($tabla, $datos);

		return $respuesta;
		}
	}

	static public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){

			$tabla="registros";

			$datos=array("nombre"=>$_POST["registroNombre"],
				"email"=>$_POST["registroEmail"],
				"password"=>$_POST["registroPassword"]);

			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

		return $respuesta;
		}

	}

#SELECCIONAR REGISTROS
	static public function ctrSeleccionarRegistros($item, $valor,$table){
		$tabla=$table;

		$respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
		
		return $respuesta;
	}
	/*=============================================
	Ingreso
	=============================================*/
	public function ctrIngreso(){
		if (isset($_POST["ingresoEmail"])){

			$tabla = "registros";
			$item = "email";
			$valor= $_POST["ingresoEmail"];
			
			$respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
			if ($respuesta["email"]==$_POST["ingresoEmail"]&&$respuesta["password"]==$_POST["ingresoPassword"]) {

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

				window.location = "index.php?pagina=inicio";

				</script>';

			}else{
			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-danger">El usuario o la contraseña no coinciden</div>';
			}

		}
		

	}


	/*=============================================
	Actualizar Registro
	=============================================*/

	static public function ctrActualizarRegistro(){

		if(isset($_POST["actualizarPlaca"])){

			$tabla="buses";

			$datos=array("placa"=>$_POST["actualizarPlaca"],
					"marca"=>$_POST["actualizarMarca"],
					"modelo"=>$_POST["actualizarModelo"],
					"fecha"=>$_POST["actualizarFecha"]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla,$datos);
			return $respuesta;


		}
		
		}

	static public function ctrActualizarRegistroRuta(){

		if(isset($_POST["actualizarCodigo"])){

			$tabla="rutas";

			$datos=array("codigo"=>$_POST["actualizarCodigo"],
					"descripcion"=>$_POST["actualizarDescripcion"]);

			$respuesta = ModeloFormularios::mdlActualizarRegistroRuta($tabla,$datos);
			return $respuesta;


		}
		
		}
	static public function ctrActualizarRegistroChofer(){

		if(isset($_POST["actualizarCedula"])){

			$tabla="choferes";

			$datos=array("cedula"=>$_POST["actualizarCedula"],
					"nombre"=>$_POST["actualizarNombre"],
					"apellido"=>$_POST["actualizarApellido"],
					"edad"=>$_POST["actualizarEdad"],
					"direccion"=>$_POST["actualizarDireccion"]);
			$respuesta = ModeloFormularios::mdlActualizarRegistroChofer($tabla,$datos);
			return $respuesta;


		}
		
		}

		public function ctrEliminarRegistro(){
			if (isset($_POST["eliminarRegistro"])){

				$tabla = "buses";
				$valor = $_POST["eliminarRegistro"];

				$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

				if ($respuesta == "ok") {
					echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "../../index.php";

					</script>';
				}
			}
		}
		public function ctrEliminarRegistroRuta(){
			if (isset($_POST["eliminarRegistro"])){

				$tabla = "rutas";
				$valor = $_POST["eliminarRegistro"];

				$respuesta = ModeloFormularios::mdlEliminarRegistroRuta($tabla, $valor);

				if ($respuesta == "ok") {
					echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "../../index.php";

					</script>';
				}
			}
		}
				public function ctrEliminarRegistroChofer(){
			if (isset($_POST["eliminarRegistro"])){

				$tabla = "choferes";
				$valor = $_POST["eliminarRegistro"];

				$respuesta = ModeloFormularios::mdlEliminarRegistroChofer($tabla, $valor);

				if ($respuesta == "ok") {
					echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "../../index.php";

					</script>';
				}
			}
		}

}