<?php
    require "BD/ConectorBD.php";
	require "BD/DAOMapa.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idMapa = $_POST["idMapa"];
    $consulta = modificarImagenMapa($conexion, $imagen, $idMapa);
    header("Location: MostrarMapas.php");
?>