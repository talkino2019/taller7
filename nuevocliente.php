<?php include_once "encabezado.php" ?>
<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["rut"]) || !isset($_POST["nombre"]) || !isset($_POST["apellido_pat"]) || !isset($_POST["apellido_mat"]) || !isset($_POST["celular"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["rut"];
$descripcion = $_POST["nombre"];
$precioVenta = $_POST["apellido_pat"];
$precioCompra = $_POST["apellido_mat"];
$existencia = $_POST["celular"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(codigo, descripcion, precioVenta, precioCompra, existencia) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo, $descripcion, $precioVenta, $precioCompra, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>