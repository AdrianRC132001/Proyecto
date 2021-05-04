<?php
    require "BD/ConectorBD.php";
	require "BD/DAOVideojuego.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idVideojuego = $_POST["idVideojuego"];
    $consulta = modificarImagenVideojuego($conexion, $imagen, $idVideojuego);
    header("Location: Admin.php");
?>