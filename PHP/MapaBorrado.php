<?php
	require "BD/ConectorBD.php";
	require "BD/DAOMapa.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idMapa = $_POST["idMapa"];
	$consulta = borrarMapa($conexion, $idMapa);
	header("Location: MostrarMapas.php");
?>