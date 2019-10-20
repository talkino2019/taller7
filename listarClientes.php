<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM Cliente;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Listado de Clientes</h1>
		<div>
			<a class="btn btn-success" href="./FormularioCliente.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Rut</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
					<th>Celular</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->rut ?></td>
					<td><?php echo $producto->nombre ?></td>
					<td><?php echo $producto->apellido_pat  ?></td>
					<td><?php echo $producto->apellido_mat ?></td>
					<td><?php echo $producto->celular ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editarCliente.php?rut=" . $producto->rut?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminarCliente.php?rut=" . $producto->rut?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>