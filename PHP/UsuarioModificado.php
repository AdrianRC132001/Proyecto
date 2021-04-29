<?php  
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$rol = $_POST["rol"];
	$idUsuario = $_POST["idUsuario"];
	$consulta = modificarUsuario($conexion, $rol, $idUsuario);
	header("Location: Admin.php");
?>