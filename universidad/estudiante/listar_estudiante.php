<?php
//Incluyo el script de utilidades
require_once("../modelo/utilidades.class.php");
//Instancio la clase utilidades
$utilities = new utilidades;
//Hago la conexión con la BD
$con = $utilities->conexion();
//Creo la cadena SQL
$sql="select * from estudiante";
//Ejecuto la consulta en la BD
$ok=$con->query($sql); //En este caso el query devuelve un juego de registros en un objeto
if ($ok==true)
{
	?>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">
		<link rel="stylesheet" type="text/css" href="../css/estilos_form.css">
		<title>Listar carreras</title>
	</head>
	<body>	
		<center><div class="bb3"><h3>listado de estudiantes</h3></div></center>
			<center><table align="center" class="table2">
				<tr>
					<td align="center" class="cabecera_columna">Cedula</td>
					<td align="center" class="cabecera_columna">Apellido</td>
					<td align="center" class="cabecera_columna">Nombre</td>
					<td align="center" class="cabecera_columna">Fecha de Nacimiento</td>
					<td align="center" class="cabecera_columna">Correo</td>
					<td align="center" class="cabecera_columna">Telefono</td>
					<td align="center" class="cabecera_columna">Direccion</td>
				</tr>
				<?php
					while (($fila=$ok->fetch_assoc())>0) //Recorre fila por fila el juego de registros y asigna un vector llamado fila con los datos de cada registo
					{
						echo "<tr>";
						echo "<td>".$fila['cedula']."</td>";
						echo "<td align='center'>".$fila['apellido']."</td>";
						echo "<td align='center'>".$fila['nombre']."</td>";
						echo "<td align='center'>".$fila['fecha_nac']."</td>";
						echo "<td align='center'>".$fila['correo_elec']."</td>";
						echo "<td align='center'>".$fila['telefono']."</td>";
						echo "<td align='center'>".$fila['direccion']."</td>";
						echo "</tr>";
					}
				?>
			</table>
			<br>
			<a href="../principal.php" class="boton1">Inicio</a>
			<a href="../logout.php" class="boton1">Salir</a></center>
	</body>
	</html>
<?php
}
else
{
	echo "Falló la consulta";
}