<?php 
require_once "modelo/mdlpalabras.php";

class ClassRegistro 
{
	public function registrosPalabras(){

	if (isset($_POST["datosPalabras"]) && $_POST["datosPalabras"]!="") {
    $datos=$_POST["datosPalabras"];
    $res=modeloPalabra::registroPalabra($datos);
    return $res;	
		
		}
	}
}
