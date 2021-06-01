<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOPlataforma.php";
    $conexion = conectar(true);
    $idComentario = $_POST["idComentario"];
    $consulta = borrarComentarioPlataforma($conexion, $idComentario);
?>