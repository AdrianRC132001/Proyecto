<?php  
	require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    session_start();
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idUsuario = $_SESSION["idUsuario"];
	borrarUsuario($conexion, $idUsuario);
    session_destroy();
	header("Location: Home.php");
?>