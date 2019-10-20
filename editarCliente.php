<?php
if(!isset($_GET["rut"])) exit();
$rut = $_GET["rut"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM cliente WHERE rut = ?;");
$sentencia->execute([$rut]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar Cliente</h1>
		<form method="post" action="guardarDatosEditadosCliente.php">
		 <input type="hidden" name="rut" id="rut" value="<?php echo $producto->rut; ?>"> <label for="rut">Rutt:</label>
			<input value="<?php echo $producto->rut ?>" class="form-control" name="rutt" required type="text" id="rutt" disabled>

			<label for="nombre">nombre:</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" id="nombre">

			<label for="apellido_pat">Apellido Paterno:</label>
			<input value="<?php echo $producto->apellido_pat ?>" class="form-control" name="apellido_pat" required id="apellido_pat" placeholder="Precio de venta">

			<label for="apellido_mat">Apellido Materno:</label>
			<input value="<?php echo $producto->apellido_mat ?>" class="form-control" name="apellido_mat" required id="apellido_mat" placeholder="Precio de compra">

			<label for="celular">Celular:</label>
			<input value="<?php echo $producto->celular ?>" class="form-control" name="celular" required type="celular" id="celular">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listarClientes.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
