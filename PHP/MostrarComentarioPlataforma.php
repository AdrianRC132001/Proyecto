<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOPlataforma.php";
    $conexion = conectar(true);
    session_start();
    $idPlataforma = $_GET["idPlataforma"];
    $consulta = mostrarComentarioPlataforma($conexion, $idPlataforma);
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