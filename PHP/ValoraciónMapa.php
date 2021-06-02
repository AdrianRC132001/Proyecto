<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMapa.php";
    $conexion = conectar(true);
    $idMapa = $_POST["idMapa"];
    $idUsuario = $_POST["idUsuario"];
    $puntuacion = $_POST["numeroPuntuacion"];
    $consulta = mostrarPuntuacionMapa($conexion, $idMapa, $idUsuario);
    if(mysqli_num_rows($consulta) != 0)
    {
        modificarPuntuacionMapa($conexion, $puntuacion, $idMapa, $idUsuario);
    }
    else
    {
        insertarPuntuacionMapa($conexion, $idMapa, $idUsuario, $puntuacion);
    }
?>