<?php
    require "BD/ConectorBD.php";
	require "BD/DAOMapa.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$nombre = $_POST["nombre"];
    $historia = $_POST["historia"];
    $dlc = $_POST["dlc"];
	$publicacion = $_POST["publicacion"];	
	$precio = $_POST["precio"];
	$stock = $_POST["stock"];
	$descripcion = $_POST["descripcion"];
    $compania = $_POST["compania"];
    $idMapa = $_POST["idMapa"];
    $consulta = modificarMapa($conexion, $nombre, $publicacion, $precio, $stock, $descripcion, $compania, $dlc, $historia, $idMapa);
    header("Location: MostrarMapas.php");
?>