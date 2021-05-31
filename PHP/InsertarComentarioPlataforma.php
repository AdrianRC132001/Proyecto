<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOPlataforma.php";
    $conexion = conectar(true);
    session_start();
    $idUsuario = $_POST["idUsuario"];
    $idPlataforma = $_POST["idPlataforma"];
    $comentario = $_POST['comentarioPlataforma'];
    $nick = $_SESSION['Nick'];
    if($comentario == NULL)
    {
    }
    else
    {
        insertarComentarioPlataforma($conexion, $idUsuario, $idPlataforma, $comentario, $nick);
    }
?>