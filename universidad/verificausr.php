<!DOCTYPE html>
<html>
<head>
	<title>Verificacion de datos del login</title>
</head>
<body>
<?php 
$usr=$_POST['usr'];
$pass=$_POST['pass'];
$datousr=false;
$datopass=false;
$Vlectora=fopen("db.txt","r");
while (!feof($Vlectora)) {
	$lineaplinea=fgets($Vlectora);
	if (strlen($lineaplinea)>1) {
		$explorador=explode(",",$lineaplinea);
		if ($explorador[2]===$usr) {
			$datousr=true;
			if (substr($explorador[3],0,8)===$pass) {
				$datopass=true;
				break;
				}
				else
					header("Location: login.php");
					break;
			}
		}
	}
fclose($Vlectora);
if (!$datousr)
	echo '<script type="text/javascript">alert("El Usuario es incorrecto o no existe");</script>';
	else
		if (!$datopass) 
			echo '<script type="text/javascript">alert("Contraseña incorrecta");</script>';
			else{
				echo "bienvenido";
				session_start();
				$_SESSION['ids']=session_id();
				$_SESSION['Ausr']=$explorador;#guarda el array de usuarios.
				header("Location: principal.php");
			}
		
	

 ?>
</body>
</html>