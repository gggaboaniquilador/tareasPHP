<html5>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../images/books.ico">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos_form.css">
	<title>Formulario para agregar carrera</title>
</head>
<body onload="document.getElementById('descripcion').focus();">
	<form method="POST" name="form_car" id="form_car">
		<table align="center" class="tabla_grande box1">
			<tr align="center">
				<td colspan="2" id="encabezado">Agregar Carrera</td>
			</tr>
			<tr>
				<td align="right">Nombre de la Carrera</td>
				<td><input type="text" id="descripcion" name="descripcion" size="60" maxlength="30" placeholder="Ingrese el nombre" onblur="soloMayusculas('descripcion')"></td>
			</tr>
			<tr>
				<td align="right">Unidades Crédito</td>
				<td><input type="text" id="unicred" name="unicred" size="20" maxlength="3" placeholder="999" onkeypress="return SoloNumeros(event)"></td>
			</tr>
			<tr>
				<td align="right">Letra</td>
				<td><input type="text" id="letra" name="letra" size="20" maxlength="1" placeholder="A" onblur="soloMayusculas('letra')"></td>
			</tr>
			<tr>
				<td align="right">Trayectos</td>
				<td><input type="text" id="trayectos" name="trayectos" size="20" maxlength="1" placeholder="9" onkeypress="return SoloNumeros(event)"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" name="btnEnviar" id="btnEnviar" value="Guardar" class="boton-submit" onclick="return validaCarrera('incluir')">
					<input type="reset" name="btnLimpiar" id="btnLimpiar" value="Limpiar" class="boton-cancel">
				</td>
			</tr>
		</table>
	</form>
	<br>
	<div id="mensaje" class="mensaje_ok notable" style="display: none;"></div>
</body>
</html>
<script src="../js/libreria.js"></script>