<?php
    function contarProductos($conexion, $idCesta)
    {
        $consulta = "SELECT count(idCesta) FROM Proyecto.Items WHERE idCesta = '$idCesta'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function verCarrito($conexion, $idCesta)
    {
        $consulta = "SELECT * FROM Proyecto.Items WHERE idCesta = '$idCesta'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function precioTotal($conexion, $idCesta)
    {
        $consulta = "SELECT sum(PrecioProducto * Cantidad) FROM Proyecto.Items WHERE idCesta = '$idCesta'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function sumarCantidad($conexion, $idItem)
    {
        $consulta = "UPDATE `Proyecto`.`Items` SET `Cantidad` = Cantidad + 1 WHERE(`idItem` = '$idItem')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function restarCantidad($conexion, $idItem)
    {
        $consulta = "UPDATE `Proyecto`.`Items` SET `Cantidad` = Cantidad - 1 WHERE(`idItem` = '$idItem')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarProductoCarrito($conexion, $idItem)
    {
        $consulta = "DELETE FROM `Proyecto`.`Items` WHERE(`idItem` = '$idItem')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarCarrito($conexion, $idCesta)
    {
        $consulta = "DELETE FROM `Proyecto`.`Items` WHERE(`idCesta` = '$idCesta')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>