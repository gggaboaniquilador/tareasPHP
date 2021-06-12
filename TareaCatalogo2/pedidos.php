<?php
function Check($array)
{
	$Chk="";
	if (array_key_exists('discos',$array))
	{
		$Chk=$array['discos'][0]." ".$array['descrip'.$array['discos'][0]]." ".$array['precio'.$array['discos'][0]];
		for ($i=1;$i<count($array['discos']);$i++)			
			$Chk=$Chk.";".$array['discos'][$i]." ".$array['descrip'.$array['discos'][$i]]." ".$array['precio'.$array['discos'][$i]];
	}
	else
		echo "<center><h1 class='box1'>Pedido esta vacio</h1></center>";
	
	return $Chk;
}
function prec($array){
	$ps="";
	if (array_key_exists('discos',$array))
	{
		$ps=$array['precio'.$array['discos'][0]];
		for ($i=1;$i<count($array['discos']);$i++)			
			$ps=$ps+$array['precio'.$array['discos'][$i]];
	}
	return $ps;
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Verificacion de pedido</title>
	<link rel="stylesheet" href="style/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/Diamond Axe & Pickaxe.ico">
	</head>
	<body>
		<center><div class="slider2">
				<a href="principal.php">Inicio</a>
		<a href="logout.php">Salir</a>
	</div></center>
		<center><h2 class='tituloped'>Datos del Pedido</h2></center>
		<br>
		<?php 
			$Cped=Check($_POST);
			$Ped=explode(";",$Cped);
			$pped=prec($_POST);
			$pre=explode(";",$pped);
		?>
		<center><div class="box1">
		<table align="center" class="tabped">
			<tr>
				<th colspan=3>Productos</th>				
			</tr>
			<?php
			foreach ($Ped as $key => $value)
			{	
				echo "<tr>";
				echo "<td colspan=3>".$value."</td>";			
				echo "</tr>";
			}
			foreach ($pre as $key => $value2)
			{	
				echo "<tr>";
				echo "<td colspan=3> total a pagar: <br></td>  ";
				echo "<td colspan=3>".$value2."</td>";			
				echo "</tr>";
				$file = fopen("archivo.txt", "w");
				fwrite($file, "Compra: "." ".$Cped."\n");
  				fwrite($file, "Total:"." ".$value2);
				fclose($file);
			}
			

		?>
		</table>
		</div></center>
		<center><div class="box2">
			<form action="principal.php" method="post">
			<p class="ver">Verificar pedido?</p>
			<input type="checkbox" name="verificaped">
			<input class="boton2"type="submit" name="chequeado">
		</form>
		</div></center>
	</body>
</html>