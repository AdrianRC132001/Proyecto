<?php
	require "BD/ConectorBD.php";
	require "BD/DAOVideojuego.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idVideojuego = $_POST["idVideojuego"];
	$consulta = borrarVideojuego($conexion, $idVideojuego);
	header("Location: Admin.php");
?>