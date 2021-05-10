<?php
    require "BD/ConectorBD.php";
	require "BD/DAOProducto.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idProducto = $_POST["idProducto"];
    $consulta = modificarImagenProducto($conexion, $imagen, $idProducto);
    header("Location: MostrarProductos.php");
?>