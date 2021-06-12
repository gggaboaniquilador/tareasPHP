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
	<link rel="stylesheet" type="text/css" href="style/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/MineCraft.ico">
</head>
<body>
<center><div class="bb2">
<h1 align="center" class="titulop">Bienvenido/a</h1>
<h1 align="center" class="titulop">su ID de sesion es <?php echo"$idsesion" ?></h2></div></center>
	<center><div class="slider">
		<a href="catalogo.php"> Catalogo de productos</a>
		<a href="pedidos.php">Pedidos de producto</a>
		<a href="archivo.txt">Datos de la compra</a>
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