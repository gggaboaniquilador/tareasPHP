<?php
//Incluyo el script de utilidades
require_once("../modelo/utilidades.class.php");
//Instancio la clase utilidades
$utilities = new utilidades;
//Hago la conexión con la BD
$con = $utilities->conexion();
//Creo la cadena SQL
$sql="select * from carrera";
//Ejecuto la consulta en la BD
$ok=$con->query($sql); //En este caso el query devuelve un juego de registros en un objeto
if ($ok==true)
{
	?>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/estilos_form.css">
		<title>Listar carreras</title>
	</head>
	<body>	
			<center><table align="center" class="table2">
				<tr align="center">
					<td colspan="5" id="encabezado" class="cabecera_tabla">Listar Carreras</td>
				</tr>
				<tr>
					<td align="center" class="cabecera_columna">Código</td>
					<td class="cabecera_columna">Descripción</td>
					<td align="center" class="cabecera_columna">UC Totales</td>
					<td align="center" class="cabecera_columna">Letra</td>
					<td align="center" class="cabecera_columna">Trayectos</td>
				</tr>
				<?php
					while (($fila=$ok->fetch_assoc())>0) //Recorre fila por fila el juego de registros y asigna un vector llamado fila con los datos de cada registo
					{
						echo "<tr>";
						echo "<td align='center'>".$fila['codigo']."</td>";
						echo "<td>".$fila['descripcion']."</td>";
						echo "<td align='center'>".$fila['uc_totales']."</td>";
						echo "<td align='center'>".$fila['letra']."</td>";
						echo "<td align='center'>".$fila['trayectos']."</td>";
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