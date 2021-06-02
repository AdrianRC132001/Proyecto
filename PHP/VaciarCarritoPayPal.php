<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
    require "BD/DAOPlataforma.php";
    require "BD/DAOVideojuego.php";
    require "BD/DAOMerchandising.php";
    require "BD/DAOUsuario.php";
    $conexion = conectar(true);
    session_start();
    $idCesta = $_SESSION['idUsuario'];
    borrarCarrito($conexion, $idCesta);
    header('Location: CompraFinalizada.php');
?>