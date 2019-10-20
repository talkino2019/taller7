
<?php include_once "encabezado.php" 

?>




<div class="col-xs-12">
	<h1>Ingresar Nuevo Cliente</h1>
	<form method="post" action="IngresarCliente.php">
		<label for="rut">rut:</label>
		<input class="form-control" name="rut" required type="text" id="rut" placeholder="Escribe el código">

		<label for="nombre">Nombre:</label>
		<input name="nombre"  class="form-control">

		<label for="apellido_pat">Apellido Paterno:</label>
		<input class="form-control" name="apellido_pat" required type="text" id="apellido_pat" placeholder="Apellido Paterno...">

		<label for="apellido_mat">Apellido Materno:</label>
		<input class="form-control" name="apellido_mat" required type="text" id="apellido_mat" placeholder="Apellido Materno..">

		<label for="celular">Celular de Contacto:</label>
		<input class="form-control" name="celular" required type="number" id="celular" placeholder="987654321">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
    
    <div>
			<a class="btn btn-success" href="./listarClientes.php">Listar Clientes <i class="fa fa-plus"></i></a>
		</div>
</div>
<?php include_once "pie.php" ?>