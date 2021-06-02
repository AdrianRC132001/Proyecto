<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMapa.php";
    $conexion = conectar(true);
    $idComentario = $_POST["idComentario"];
    $consulta = borrarComentarioMapa($conexion, $idComentario);
?>