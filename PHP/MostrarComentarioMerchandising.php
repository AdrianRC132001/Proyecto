<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    require "BD/DAOMerchandising.php";
    $conexion = conectar(true);
    session_start();
    $idMerchandising = $_GET["idMerchandising"];
    $consulta = mostrarComentarioMerchandising($conexion, $idMerchandising);
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