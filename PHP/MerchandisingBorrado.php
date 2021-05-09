<?php
	require "BD/ConectorBD.php";
	require "BD/DAOMerchandising.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idMerchandising = $_POST["idMerchandising"];
	$consulta = borrarMerchandising($conexion, $idMerchandising);
	header("Location: MostrarMerchandising.php");
?>