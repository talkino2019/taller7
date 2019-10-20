<?php
if(!isset($_POST["codigo"])) return;
$codigo = $_POST["codigo"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM cliente where rut = '15.138.671-7' ;");
$sentencia->execute([$codigo]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
header("Location: ./vender3.php");

?>