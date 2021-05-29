<?php
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
	require "BD/DAOMerchandising.php";
    $conexion = conectar(true);
    session_start();
    $idMerchandising = $_GET["idMerchandising"];
    $idCesta = $_SESSION["idUsuario"];
    $buscarMerchandising = mysqli_fetch_assoc(detallesMerchandising($conexion, $idMerchandising));
    $precio = $buscarMerchandising["Precio"];
    $nombre = $buscarMerchandising["Nombre"];
    $stock = $buscarMerchandising["Stock"];
    $buscarMerchandisingCarrito = buscarMerchandisingCarrito($conexion, $idMerchandising, $idCesta);
    if(mysqli_num_rows($buscarMerchandisingCarrito) != 0)
    {
        $sumar = sumarCantidadMerchandising($conexion, $idMerchandising);
        header("Location: Merchandising.php");
    }
    else
    {
        $cantidad = 1;
        $insertar = insertarMerchandisingCarrito($conexion, $idMerchandising, $idCesta, $cantidad, $precio, $nombre, $stock);
        header("Location: Merchandising.php");
    }
?>