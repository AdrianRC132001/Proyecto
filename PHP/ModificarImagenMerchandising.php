<?php
    require "BD/ConectorBD.php";
	require "BD/DAOMerchandising.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idMerchandising = $_POST["idMerchandising"];
    $consulta = modificarImagenMerchandising($conexion, $imagen, $idMerchandising);
    header("Location: MostrarMerchandising.php");
?>