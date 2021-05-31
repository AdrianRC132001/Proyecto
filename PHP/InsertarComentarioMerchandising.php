<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMerchandising.php";
    $conexion = conectar(true);
    session_start();
    $idUsuario = $_POST["idUsuario"];
    $idMerchandising = $_POST["idMerchandising"];
    $comentario = $_POST['comentarioMerchandising'];
    $nick = $_SESSION['Nick'];
    if($comentario == NULL)
    {
    }
    else
    {
        insertarComentarioMerchandising($conexion, $idUsuario, $idMerchandising, $comentario, $nick);
    }
?>