<?php
//Incluyo el script de utilidades
require_once("../modelo/utilidades.class.php");
//Instancio la clase utilidades
$utilities = new utilidades;
//Hago la conexión con la BD
$con = $utilities->conexion();
//Obtengo el valor de la descripción desde el input
$descripcion=$_POST["descripcion"];
$unicred=$_POST["unicred"];
$letra=$_POST["letra"];
$trayectos=$_POST["trayectos"];
//Creo la cadena SQL
$sql="insert into carrera (descripcion,uc_totales,letra,trayectos) values ('$descripcion',$unicred,'$letra',$trayectos)";
//Ejecuto la consulta en la BD
$ok=$con->query($sql);
if ($ok==true)
	header("Location: ../principal.php");
else
	echo "Falló la inserción";
?>