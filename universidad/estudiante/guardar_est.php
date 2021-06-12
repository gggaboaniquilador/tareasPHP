<?php
//Incluyo el script de utilidades
require_once("../modelo/utilidades.class.php");
//Instancio la clase utilidades
$utilities = new utilidades;
//Hago la conexión con la BD
$con = $utilities->conexion();
//Obtengo el valor de la descripción desde el input
$cedula=$_POST["cedula"];
$Apellido=$_POST["Apellido"];
$Nombre=$_POST["Nombre"];
$fecha_nac=$_POST["fecha_nac"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$Direccion=$_POST["Direccion"];
//Creo la cadena SQL
$sql="insert into estudiante (cedula,apellido,nombre,fecha_nac,correo_elec,telefono,direccion) values ($cedula,'$Apellido','$Nombre','$fecha_nac','$correo','$telefono','$Direccion')";
//Ejecuto la consulta en la BD
$ok=$con->query($sql);
if ($ok==true)
	header("Location: ../principal.php");
else
	echo "Falló la inserción";
?>