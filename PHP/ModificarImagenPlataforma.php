<?php
    require "BD/ConectorBD.php";
	require "BD/DAOPlataforma.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idPlataforma = $_POST["idPlataforma"];
    $consulta = modificarImagen($conexion, $imagen, $idPlataforma);
    header("Location: Admin.php");
?>