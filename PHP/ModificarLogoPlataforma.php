<?php
    require "BD/ConectorBD.php";
	require "BD/DAOPlataforma.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
    $idPlataforma = $_POST["idPlataforma"];
    $consulta = modificarLogo($conexion, $logo, $idPlataforma);
    header("Location: Admin.php");
?>