<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
    require "BD/DAOPlataforma.php";
    require "BD/DAOVideojuego.php";
    require "BD/DAOMerchandising.php";
    require "BD/DAOUsuario.php";
    $idItem = $_GET["idProductoCarrito"];
    $conexion = conectar(true);
    restarCantidad($conexion, $idItem);
    header('Location: Carrito.php');
?>