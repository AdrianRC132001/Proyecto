<?php
	require "BD/ConectorBD.php";
	require "BD/DAOProducto.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idProducto = $_POST["idProducto"];
	$consulta = borrarProducto($conexion, $idProducto);
	header("Location: MostrarProductos.php");
?>