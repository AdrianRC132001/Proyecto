<?php
    require "BD/ConectorBD.php";
	require "BD/DAOProducto.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idPlataforma = $_POST["plataforma"];
    $idVideojuego = $_POST["videojuego"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $descripcion = $_POST["descripcion"];
    $idProducto = $_POST["idProducto"];
    $consulta = modificarProducto($conexion, $idPlataforma, $idVideojuego, $stock, $precio, $descripcion, $nombre, $idProducto);
    header("Location: MostrarProductos.php");
?>