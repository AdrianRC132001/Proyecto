<?php
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $idUsuario = $_POST["idUsuario"];
    $consulta = modificarFoto($conexion, $foto, $idUsuario);
    header("Location: MostrarUsuarios.php");
?>