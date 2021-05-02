<?php
	require "BD/ConectorBD.php";
	require "BD/DAOPlataforma.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idPlataforma = $_POST["idPlataforma"];
	$consulta = borrarPlataforma($conexion, $idPlataforma);
	header("Location: Admin.php");
?>