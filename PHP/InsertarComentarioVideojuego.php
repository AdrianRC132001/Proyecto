<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOVideojuego.php";
    $conexion = conectar(true);
    session_start();
    $idUsuario = $_POST["idUsuario"];
    $idVideojuego = $_POST["idVideojuego"];
    $comentario = $_POST['comentarioVideojuego'];
    $nick = $_SESSION['Nick'];
    if($comentario == NULL)
    {
    }
    else
    {
        insertarComentarioVideojuego($conexion, $idUsuario, $idVideojuego, $comentario, $nick);
    }
?>