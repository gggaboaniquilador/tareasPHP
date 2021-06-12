<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
$rutas = ControladorFormularios::ctrSeleccionarRegistros(null,null,"rutas");
 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Descripcion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			 <?php foreach ($rutas as $key => $value): ?>
			 	<tr>
			 	<td><?php echo $value["codigo"]; ?></td>
			 	<td><?php echo $value["descripcion"]; ?></td>
			 	<td><div class="btn-group">
					<div class="px-1">
					<a href="editarRuta.php?codigo=<?php echo $value["codigo"]; ?>"class="btn btn-warning">editar</a>
					</div>
					<form method="post">
						<input type="hidden" value="<?php echo $value["codigo"]?>" name="eliminarRegistro">
						<button type="submit" class="btn btn-danger">eliminar</button>
						<?php 
						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistroRuta();
						 ?>
					</form>
				</div></td>
				</tr>
			 <?php endforeach ?>
		</tbody>
	</table>
</div>