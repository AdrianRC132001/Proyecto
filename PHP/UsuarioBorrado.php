<?php  
	require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idUsuario = $_GET["idUsuario"];
	$consulta = borrarUsuario($conexion, $idUsuario);
	header("Location: Admin.php");
?>