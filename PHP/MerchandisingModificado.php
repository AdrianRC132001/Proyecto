<?php
    require "BD/ConectorBD.php";
	require "BD/DAOMerchandising.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$nombre = $_POST["nombre"];
	$precio = $_POST["precio"];
	$stock = $_POST["stock"];
	$descripcion = $_POST["descripcion"];
    $idMerchandising = $_POST["idMerchandising"];
    $consulta = modificarMerchandising($conexion, $nombre, $precio, $stock, $descripcion, $idMerchandising);
    header("Location: MostrarMerchandising.php");
?>