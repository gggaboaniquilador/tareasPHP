<?php
class utilidades
{
	function conexion()
	{
		$con = new mysqli("localhost","root","","universidad_curso");
		if ($con->connect_errno)
		{
		    echo "Fallo al conectar al servidor: (" . $con->connect_errno . ") " . $con->connect_error;
		}		
		else		
			return $con;
	}
}
?>