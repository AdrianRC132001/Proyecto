<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMapa.php";
    $conexion = conectar(true);
    session_start();
    $idMapa = $_GET["idMapa"];
    $consulta = mostrarComentarioMapa($conexion, $idMapa);
    $json = array();
    while($mostrar = mysqli_fetch_array($consulta))
    {
        $json[] = array(
            'Comentario' => $mostrar['Comentario'],
            'Nick' => $mostrar['Nick'],
            'idUsuario' => $mostrar['idComentarioUsuario'],
        );
    }
    $mostrarComentario = json_encode($json);
    echo $mostrarComentario;
?>