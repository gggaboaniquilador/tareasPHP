<?php 
/**
 * 
 */
class Conexion{

	static public function conectar(){

		#PDO: ("nombre del servidor"); ("nombre de la base de datos"); ("nombre de ususario"); ("Contraseña"); 

		$link = new PDO("mysql:host=localhost;dbname=rutas", "root", "");
		$link->exec("set names utf8");

		return $link;
	}
}
