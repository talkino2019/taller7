<?php
if(!isset($_POST["rut"])) return;
$codigo = $_POST["rut"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM cliente where rut='15.138.671-7'; ");
$sentencia->execute([$rut);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
	header("Location: ./vender.php");
?>