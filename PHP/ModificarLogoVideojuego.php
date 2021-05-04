<?php
    require "BD/ConectorBD.php";
	require "BD/DAOVideojuego.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
    $idVideojuego = $_POST["idVideojuego"];
    $consulta = modificarLogoVideojuego($conexion, $logo, $idVideojuego);
    header("Location: Admin.php");
?>