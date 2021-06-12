<?php 
require_once "../../controladores/formularios.controlador.php";
require_once "../../modelos/Formularios.modelo.php";
$buses = ControladorFormularios::ctrSeleccionarRegistros(null,null,"buses");
 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>Placa</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Año</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			 <?php foreach ($buses as $key => $value): ?>
			 	<tr>
			 	<td><?php echo $value["placa"]; ?></td>
			 	<td><?php echo $value["marca"]; ?></td>
			 	<td><?php echo $value["modelo"]; ?></td>
			 	<td><?php echo $value["fecha"]; ?></td>
			 	<td><div class="btn-group">
					<div class="px-1">
					<a href="editarBus.php?placa=<?php echo $value["placa"]; ?>"class="btn btn-warning">editar</a>
					</div>
					<form method="post">
						<input type="hidden" value="<?php echo $value["placa"]?>" name="eliminarRegistro">
						<button type="submit" class="btn btn-danger">eliminar</button>
						<?php 
						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistro();
						 ?>
					</form>
				</div></td>
				</tr>
			 <?php endforeach ?>
		</tbody>
	</table>
</div>