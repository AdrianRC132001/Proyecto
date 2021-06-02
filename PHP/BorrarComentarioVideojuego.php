<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOVideojuego.php";
    $conexion = conectar(true);
    $idComentario = $_POST["idComentario"];
    $consulta = borrarComentarioVideojuego($conexion, $idComentario);
?>