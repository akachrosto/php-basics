<?php 

include("conexion.php");

$id = $_GET["id"];

$solicitud = "DELETE FROM datos WHERE id=$id";
$resultado = mysqli_query($conexion, $solicitud);

header('location: consultas.php')

?>