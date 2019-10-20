<?php
if(!isset($_GET["rut"])) exit();
$rut = $_GET["rut"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM cliente WHERE rut = ?;");
$resultado = $sentencia->execute([$rut]);
if($resultado === TRUE){
	header("Location: ./listarClientes.php");
	exit;
}
else echo "Algo salió mal";




?>