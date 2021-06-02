<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMerchandising.php";
    $conexion = conectar(true);
    $idComentario = $_POST["idComentario"];
    $consulta = borrarComentarioMerchandising($conexion, $idComentario);
?>