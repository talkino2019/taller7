<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["rut"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellido_pat"]) || 
	!isset($_POST["apellido_mat"]) || 
	!isset($_POST["celular"]) 
	) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$rut = $_POST["rut"];
$nombre = $_POST["nombre"];
$apellido_pat = $_POST["apellido_pat"];
$apellido_mat = $_POST["apellido_mat"];
$celular = $_POST["celular"];


$sentencia = $base_de_datos->prepare("UPDATE cliente SET rut = ?, nombre = ?, apellido_pat = ?, apellido_mat = ?, celular = ? WHERE rut = ?;");
$resultado = $sentencia->execute([$rut, $nombre, $apellido_pat, $apellido_mat, $celular, $rut]);

echo $resultado;

if($resultado === TRUE){
	header("Location: ./listarClientes.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>