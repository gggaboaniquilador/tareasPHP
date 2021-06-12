<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<script type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/MineCraft.ico">
	<script type="text/javascript" src="js/revision.js"></script>
	</head>
<body>
	<center><div class="bb"><h2>BIENVENIDO!</h2><h3>Ingresa tus datos</h3></div></center>
	<center>
		<form name="formulario" class="box1" method="post" action="verificausr.php">
		<table align="center">
		<tr>
			<td>
				<p>Usuario:</p>
				<input class="cajausr" type="text" name="usr" id="usr" placeholder="ESCRIBA AQUI SU USARIO" maxlength="60" size="45" onblur="return vacio(this)">
			</td>
		</tr>
		<center><tr>
			<td>
				<p>Contraseña:</p>
				<input class="cajausr"type="password" name="pass" id="pass" placeholder="ESCRIBA AQUI SU CONTRASEÑA" maxlength="60" size="45" onblur="return vacio(this)">
			</td>
		</tr></center>
		<tr>
			<td>
				<center><input class="boton3" id="btn" type="submit" name="entrar" value="Iniciar Sesion"></center>
			</td>
		</tr>
		</table>
		</form>
			</center>


</body>
</html>