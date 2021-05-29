<?php
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
	require "BD/DAOVideojuego.php";
    $conexion = conectar(true);
    session_start();
    $idVideojuego = $_GET["idVideojuego"];
    $idCesta = $_SESSION["idUsuario"];
    $buscarVideojuego = mysqli_fetch_assoc(detallesVideojuego($conexion, $idVideojuego));
    $precio = $buscarVideojuego["Precio"];
    $nombre = $buscarVideojuego["Título"];
    $stock = $buscarVideojuego["Stock"];
    $buscarVideojuegoCarrito = buscarVideojuegoCarrito($conexion, $idVideojuego, $idCesta);
    if(mysqli_num_rows($buscarVideojuegoCarrito) != 0)
    {
        $sumar = sumarCantidadVideojuego($conexion, $idVideojuego);
        header("Location: Videojuegos.php");
    }
    else
    {
        $cantidad = 1;
        $insertar = insertarVideojuegoCarrito($conexion, $idVideojuego, $idCesta, $cantidad, $precio, $nombre, $stock);
        header("Location: Videojuegos.php");
    }
?>