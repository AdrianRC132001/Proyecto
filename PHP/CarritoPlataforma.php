<?php
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
	require "BD/DAOPlataforma.php";
    $conexion = conectar(true);
    session_start();
    $idPlataforma = $_GET["idPlataforma"];
    $idCesta = $_SESSION["idUsuario"];
    $buscarPlataforma = mysqli_fetch_assoc(detallesPlataforma($conexion, $idPlataforma));
    $precio = $buscarPlataforma["Precio"];
    $nombre = $buscarPlataforma["Nombre"];
    $stock = $buscarPlataforma["Stock"];
    $buscarPlataformaCarrito = buscarPlataformaCarrito($conexion, $idPlataforma, $idCesta);
    if(mysqli_num_rows($buscarPlataformaCarrito) != 0)
    {
        $sumar = sumarCantidadPlataforma($conexion, $idPlataforma);
        header("Location: Plataformas.php");
    }
    else
    {
        $cantidad = 1;
        $insertar = insertarPlataformaCarrito($conexion, $idPlataforma, $idCesta, $cantidad, $precio, $nombre, $stock);
        header("Location: Plataformas.php");
    }
?>