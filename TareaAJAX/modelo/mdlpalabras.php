<?php  

require_once "conexion.php";
class modeloPalabra
{
	static public function Leer(){
		$stmt=Conexion::conectar()->prepare("SELECT * FROM palabras");//selecciona todos los datos de la tabla
		$stmt->execute();//Hace la ejecucion de la declaracion previa
		return $stmt->fetchAll();//regresa en un array todos los datos de la tabla
	}
	static public function registroPalabra($datos){

		$stmt=Conexion::conectar()->prepare("INSERT INTO palabras (palabra) VALUES (:palabra)");//hace la declaracion de insertar en una tabla por un parametro ciego de PDO

		$stmt->bindParam(":palabra", $datos, PDO::PARAM_STR);//instanciamos una funcion de PDO, pasamos el parametro ciego ":palabra", los datos que van en este parametro son la variable $datos, PDO solo lo pasa como parametro ciego u oculto

		if ($stmt->execute()) {
		return "ok"; //esto es para saber si realmente la declaracion se ejecuto

		}else{
		print_r(Conexion::conectar()->errorInfo());

}
}
}