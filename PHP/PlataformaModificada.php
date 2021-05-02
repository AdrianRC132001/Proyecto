<?php
    require "BD/ConectorBD.php";
	require "BD/DAOPlataforma.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$nombre = $_POST["nombre"];
	$lanzamiento = $_POST["lanzamiento"];	
	$precio = $_POST["precio"];
	$stock = $_POST["stock"];
	$descripcion = $_POST["descripcion"];
    $compania = $_POST["compania"];
    $idPlataforma = $_POST["idPlataforma"];
    $consulta = modificarPlataforma($conexion, $nombre, $lanzamiento, $precio, $stock, $descripcion, $compania, $idPlataforma);
    header("Location: Admin.php");
?>