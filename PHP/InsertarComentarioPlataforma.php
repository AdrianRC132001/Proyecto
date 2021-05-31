<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOPlataforma.php";
    $conexion = conectar(true);
    $idUsuario = $_POST["idUsuario"];
    $idPlataforma = $_POST["idPlataforma"];
    $comentario = $_POST['comentarioPlataforma'];
    if($comentario == NULL)
    {
    }
    else
    {
        insertarComentarioPlataforma($conexion, $idUsuario, $idPlataforma, $comentario);
    }
?>