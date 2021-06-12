<?php 
session_start();
if (!(array_key_exists("ids", $_SESSION))||($_SESSION["ids"]!=session_id())) {
	echo "<h2>No Inicio Sesion Corectamente<h2>";
}
else{
$Arrayusr=$_SESSION['Ausr'];
$idsesion=$_SESSION['ids'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>principal</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<center><div class="bb2">
<h1 align="center" class="titulop">Bienvenido/a</h1>
<h1 align="center" class="titulop">su ID de sesion es <?php echo"$idsesion" ?></h2></div></center>
	<center><div class="slider">
		<a href="carrera/agregar_carrera.html">Agregar Carrera</a>
		<a href="especialidad/agregar_especialidad.html">Agregar Especialidad</a>
		<a href="estudiante/agregar_estudiante.html">Agregar Estudiantes</a>
		<a href="carrera/listar_carrera.php">Lista de Carreras</a>
		<a href="especialidad/listar_especialidad.php">Lista de especialidades</a>
		<a href="estudiante/listar_estudiante.php">Lista de estudiantes</a>
		<a href="logout.php">Salir</a>
	</div></center>
<br>
<center><div class="mainc"><table class="table">
	<tr class="tr">
		<th class="th">nombre</th>
		<th class="th">apellido</th>
		<th class="th">usuario</th>
	</tr>
			<?php			 		
		echo "<center><tr>";
		echo "<td class='td'>".$Arrayusr[0]."</td>";
		echo "<td class='td'>".$Arrayusr[1]."</td>";
		echo "<td class='td'>".$Arrayusr[2]."</td>";
		echo "</tr></center>";
		?>
	</table></div></center>
</body>
</html>
<?php
}
?>
</table>
</body>
</html>