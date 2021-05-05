<?php  
	require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$idUsuario = $_POST["idUsuario"];
	$consulta = borrarUsuario($conexion, $idUsuario);
	header("Location: MostrarUsuarios.php");
?>