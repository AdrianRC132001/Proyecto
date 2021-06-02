<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOPlataforma.php";
    $conexion = conectar(true);
    $idPlataforma = $_POST["idPlataforma"];
    $idUsuario = $_POST["idUsuario"];
    $puntuacion = $_POST["numeroPuntuacion"];
    $consulta = mostrarPuntuacionPlataforma($conexion, $idPlataforma, $idUsuario);
    if(mysqli_num_rows($consulta) != 0)
    {
        modificarPuntuacionPlataforma($conexion, $puntuacion, $idPlataforma, $idUsuario);
    }
    else
    {
        insertarPuntuacionPlataforma($conexion, $idPlataforma, $idUsuario, $puntuacion);
    }
?>