<?php 
require_once "conexion.php";

class ModeloFormularios{

	#REGISTRO: METODO ESTATICO, PUBLICO
	#CON EL NOMBRE MDL

	static public function mdlIngresoBus($tabla,$datos){
		#Statement= declaracion

		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(placa, marca, modelo, fecha) VALUES (:placa,:marca,:modelo,:fecha)");

		$stmt->bindParam(":placa", $datos["placa"], PDO::PARAM_STR);
		$stmt->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["año"], PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}

	static public function mdlIngresoRuta($tabla,$datos){
		#Statement= declaracion

		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, descripcion) VALUES (:codigo,:descripcion)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}
static public function mdlIngresoChofer($tabla,$datos){
		#Statement= declaracion

		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(cedula, nombre, apellido, edad, direccion) VALUES (:cedula,:nombre,:apellido,:edad, :direccion)");

		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}

	static public function mdlRegistro($tabla,$datos){
		#Statement= declaracion

		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre,:email,:password)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}

#SELECCIONAR REGISTROS
	static public function mdlSeleccionarRegistros($tabla, $item, $valor){

		if ($item == null && $valor == null) {
			$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();

		}else{
			$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
			
		}

		
		$stmt -> close();

		$stmt = null;


	}

	static public function mdlActualizarRegistro($tabla,$datos){
	
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET placa=:placa,marca=:marca,modelo=:modelo,fecha=:fecha WHERE placa=:placa");

		$stmt->bindParam(":placa", $datos["placa"], PDO::PARAM_STR);
		$stmt->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_INT);
	
		
	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}
	static public function mdlActualizarRegistroRuta($tabla,$datos){
	
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET codigo=:codigo,descripcion=:descripcion WHERE codigo=:codigo");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
	
		
	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}
	static public function mdlActualizarRegistroChofer($tabla,$datos){
	
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET cedula=:cedula,nombre=:nombre,apellido=:apellido,edad=:edad,direccion=:direccion WHERE cedula=:cedula");

		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_INT);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
	
		
	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}
	static public function mdlEliminarRegistro($tabla, $valor){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE placa = :placa");

		$stmt->bindParam(":placa", $valor, PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}
	static public function mdlEliminarRegistroRuta($tabla, $valor){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE codigo = :codigo");

		$stmt->bindParam(":codigo", $valor, PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}

	static public function mdlEliminarRegistroChofer($tabla, $valor){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cedula = :cedula");

		$stmt->bindParam(":cedula", $valor, PDO::PARAM_STR);
	

	if ($stmt->execute()) {
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());

}

	$stmt -> close();

	$stmt = null;

}

}