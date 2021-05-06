<?php
    require "BD/ConectorBD.php";
	require "BD/DAOVideojuego.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$titulo = $_POST["titulo"];
	$publicacion = $_POST["publicacion"];	
	$precio = $_POST["precio"];
	$stock = $_POST["stock"];
	$descripcion = $_POST["descripcion"];
    $compania = $_POST["compania"];
    $idVideojuego = $_POST["idVideojuego"];
    $consulta = modificarVideojuego($conexion, $titulo, $compania, $publicacion, $descripcion, $stock, $precio, $idVideojuego);
    header("Location: MostrarVideojuegos.php");
?>