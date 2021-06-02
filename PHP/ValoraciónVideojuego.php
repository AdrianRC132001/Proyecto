<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOVideojuego.php";
    $conexion = conectar(true);
    $idVideojuego = $_POST["idVideojuego"];
    $idUsuario = $_POST["idUsuario"];
    $puntuacion = $_POST["numeroPuntuacion"];
    $consulta = mostrarPuntuacionVideojuego($conexion, $idVideojuego, $idUsuario);
    if(mysqli_num_rows($consulta) != 0)
    {
        modificarPuntuacionVideojuego($conexion, $puntuacion, $idVideojuego, $idUsuario);
    }
    else
    {
        insertarPuntuacionVideojuego($conexion, $idVideojuego, $idUsuario, $puntuacion);
    }
?>