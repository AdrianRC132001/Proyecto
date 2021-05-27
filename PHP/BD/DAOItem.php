<?php
    function contarProductos($conexion, $idCesta)
    {
        $consulta = "SELECT count(idCesta) FROM Proyecto.Items WHERE idCesta = '$idCesta'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>