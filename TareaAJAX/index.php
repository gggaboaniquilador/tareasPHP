<?php 


require_once "controlador/controlador.plantilla.php";
require_once "controlador/controlador.registro.php";
require_once "modelo/mdlpalabras.php";
$mvc = new MvcControlador();


if ($mvc==null) {
	echo "vacio";
} else {
	$mvc -> Plantilla();
}