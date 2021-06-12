<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
$choferes = ControladorFormularios::ctrSeleccionarRegistros(null,null,"choferes");
 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>Direccion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			 <?php foreach ($choferes as $key => $value): ?>
			 	<tr>
			 	<td><?php echo $value["cedula"]; ?></td>
			 	<td><?php echo $value["nombre"]; ?></td>
			 	<td><?php echo $value["apellido"]; ?></td>
			 	<td><?php echo $value["edad"]; ?></td>
			 	<td><?php echo $value["direccion"]; ?></td>
			 	<td><div class="btn-group">
					<div class="px-1">
					<a href="editarChofer.php?cedula=<?php echo $value["cedula"]; ?>"class="btn btn-warning">editar</a>
					</div>
					<form method="post">
						<input type="hidden" value="<?php echo $value["cedula"]?>" name="eliminarRegistro">
						<button type="submit" class="btn btn-danger">eliminar</button>
						<?php 
						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistroChofer();
						 ?>
					</form>
				</div></td>
				</tr>
			 <?php endforeach ?>
		</tbody>
	</table>
</div>