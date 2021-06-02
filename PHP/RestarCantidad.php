<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
    require "BD/DAOPlataforma.php";
    require "BD/DAOVideojuego.php";
    require "BD/DAOMerchandising.php";
    require "BD/DAOUsuario.php";
    $idItem = $_GET["idProductoCarrito"];
    $cantidad = $_GET["cantidad"];
    $conexion = conectar(true);
    if($cantidad == 1)
    {
        borrarProductoCarrito($conexion, $idItem);
        header('Location: Carrito.php');
    }
    else
    {
        restarCantidad($conexion, $idItem);
        header('Location: Carrito.php');
    }
?>