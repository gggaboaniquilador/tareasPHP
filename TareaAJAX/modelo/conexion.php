<?php
class Conexion{

	static public function conectar(){

		#PDO: ("nombre del servidor"); ("nombre de la base de datos"); ("nombre de ususario"); ("Contraseña"); 

		$link = new PDO("mysql:host=localhost;dbname=bdpalabras", "root", ""); #CONECTAMOS MEDIANTE PDO
		$link->exec("set names utf8"); #Establecemos en utf8

		return $link;
	}
}