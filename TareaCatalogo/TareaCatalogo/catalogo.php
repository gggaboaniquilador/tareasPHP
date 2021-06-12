<?php 
session_start();
if (!(array_key_exists("ids", $_SESSION))||($_SESSION["ids"]!=session_id())) {
	echo "<h2>No Inicio Sesion Corectamente<h2>";
	header("header: login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Catalogo de productos</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="img/TNT.ico">
	<link rel="stylesheet" type="text/css" href="style/estilos.css">
</head>
<body>
	<center><div class="slider">
		<a href="principal.php">Inicio</a>
		<a href="pedidos.php">Pedidos de producto</a>
		<a href="logout.php">Salir</a>
	</div></center>
	<center><h2 class="tituloC"> Catálogo de Poductos </h2>
	<br>
	<table class="table2">
		<tr>
			<th>ID producto</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Imagen</th>
			<th>Cantidad a comprar</th>
		</tr>
		<?php 
		$Product=array();
		$Aproduct=fopen("productos.txt","r");
		while (!feof($Aproduct))
		{
			$Vlectora=fgets($Aproduct);
			if (strlen($Vlectora)>1)
				$Product[]=explode(",",$Vlectora);
		}	
		fclose($Aproduct);
		 ?>
		 <form action="pedidos.php" method="post" onsubmit="">
		 	<?php 
		 	foreach ($Product as $key => $value) {
		 		echo "<tr>";
			echo "<td>".$value[0]."</td>";
			echo "<td><input type='text' name='descrip".$value[0]."' id='descrip".$value[0]."' size='30' readonly='true' value='".$value[1]."'></td>";
			echo "<td><input type='text' name='precio".$value[0]."' id='precio".$value[0]."' size='30' readonly='true' value='".$value[2]."'></td>";
			echo "<td><img src='img/".$value[3]."' width=200 height=100 alt='".$value[1]."'  title='".$value[1]."'></td>";
			echo "<td align='center'><input class='chk' type='checkbox' name='discos[]' value='".$value[0]."'></td>";
			echo "</tr>";
		 	}
		 	 ?>
		 	 </table>
		 	 		<input class="boton2" type='submit' name='pedir' value='pedir'>
		 	 		<input class="boton2" type='reset' name='limpiar' value='limpiar'>
		 </form>
	</center>
</body>
</html>