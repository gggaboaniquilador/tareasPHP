<!DOCTYPE html5>
<html>
<head>
	<title>Prueba de AJAX</title>
	<meta charset="utf-8">
	
	<style>
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
		html{
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
		}
		body{
			background: rgb(176,255,0);
background: linear-gradient(135deg, rgba(115,212,100,1) 0%, rgba(196,239,123,1) 46%, rgba(207,242,126,1) 52%, rgba(214,227,73,1) 94%);	}

		div{
			border-top: solid .4rem #d2db52;
			margin-top: 18%;
			background: rgb(255, 255, 255);
			height: 35%;
			width: 35%;
			border-radius:10px;
			box-shadow: 
		}
		h2{
			padding-top: 20px;
			font-size: 200%;
		}
		div .form{
			font-size: 120%;
		}
		button{
		
		border: solid 1px #ccc;
		background-color: #eee;
		font-family: 'Source Sans Pro', sans-serif;
		width: 12%;
		height: 11%;
		font-size: 100%;
		margin-left: 10px;
		border:0;
		border-radius: 10px;
		font-style: bold;

	}
		input{
	border-radius: 150px;
	border: solid 1px #ccc;
	background-color: #eee;
	padding: 1.2%;
	border-top: solid .4rem #d2db52;
	margin: 10px auto;
	border-color: #cff url() 0 0 no-repeat;
		}
	select{
		font-size: 110%;
	}
</style>
<script>
function mostrarSugerencia(str) 
{
	var xmlhttp;

	if (str.length==0) 
	{
		document.getElementById("txtSugerencia").innerHTML=""; return;
	}
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("txtSugerencia").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","controlador/controlador.palabras.php?datos="+str,true);
	xmlhttp.send();
}
</script>
</head>

<body>
	<center><div class="caja"><h2>Bienvenido!, Ingresa la palabra</h2>
	<form class="form" method="post">
		Agregar Palabra: <input type="text" id="txt1" name="datosPalabras" />
		<?php 
			$ingresoPalabra = new ClassRegistro();
			$ingresoPalabra -> registrosPalabras();
		 ?>
		<button type="submit">Agregar</button>
	</form>
	<form class="form" method="post">
		Palabra: <input type="text" id="txt1" onkeyup="mostrarSugerencia(this.value);" />
	</form>
	<p>Sugerencias: <select size="">
		<option id="txtSugerencia"value="txtSugerencia"></option>
	</select></p></div></center>
</body>
</html>