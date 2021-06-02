<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMerchandising.php";
    $conexion = conectar(true);
    $idMerchandising = $_POST["idMerchandising"];
    $idUsuario = $_POST["idUsuario"];
    $puntuacion = $_POST["numeroPuntuacion"];
    $consulta = mostrarPuntuacionMerchandising($conexion, $idMerchandising, $idUsuario);
    if(mysqli_num_rows($consulta) != 0)
    {
        modificarPuntuacionMerchandising($conexion, $puntuacion, $idMerchandising, $idUsuario);
    }
    else
    {
        insertarPuntuacionMerchandising($conexion, $idMerchandising, $idUsuario, $puntuacion);
    }
?>