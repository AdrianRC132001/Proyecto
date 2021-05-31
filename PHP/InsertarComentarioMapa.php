<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMapa.php";
    $conexion = conectar(true);
    session_start();
    $idUsuario = $_POST["idUsuario"];
    $idMapa = $_POST["idMapa"];
    $comentario = $_POST['comentarioMapa'];
    $nick = $_SESSION['Nick'];
    if($comentario == NULL)
    {
    }
    else
    {
        insertarComentarioMapa($conexion, $idUsuario, $idMapa, $comentario, $nick);
    }
?>