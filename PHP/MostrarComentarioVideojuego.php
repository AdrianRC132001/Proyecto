<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOVideojuego.php";
    $conexion = conectar(true);
    session_start();
    $idVideojuego = $_GET["idVideojuego"];
    $consulta = mostrarComentarioVideojuego($conexion, $idVideojuego);
    $json = array();
    while($mostrar = mysqli_fetch_array($consulta))
    {
        $json[] = array(
            'Comentario' => $mostrar['Comentario'],
            'Nick' => $mostrar['Nick'],
            'idUsuario' => $mostrar['idComentarioUsuario'],
            'idComentario' => $mostrar['idComentario'],
        );
    }
    $mostrarComentario = json_encode($json);
    echo $mostrarComentario;
?>