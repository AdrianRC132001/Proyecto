<?php
    function insertarProducto($conexion, $idPlataforma, $idVideojuego, $stock, $precio)
    {
        $consulta = "INSERT INTO Productos(IdVideojuego, IdPlataforma, Stock, Precio) VALUES('$idVideojuego', '$idPlataforma', '$stock', '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarProducto($conexion, $idProducto)
    {
        $consulta = "DELETE FROM `Proyecto`.`Productos` WHERE(`idProducto` = '$idProducto')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function modificarProducto($conexion, $idPlataforma, $idVideojuego, $stock, $precio, $idProducto)
    {
        $consulta = "UPDATE `Proyecto`.`Productos` SET `IdPlataforma` = '$idPlataforma', `IdVideojuego` = '$idVideojuego', `Stock` = '$stock', `Precio` = '$precio' WHERE(`idProducto` = '$idProducto')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarProducto($conexion)
    {
        $consulta = "SELECT * FROM Productos";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function filtrarProducto($conexion, $id)
    {
        $consulta = "SELECT Productos.idProducto, Plataformas.idPlataforma, Plataformas.Logo, Videojuegos.idVideojuego, Videojuegos.Título, Videojuegos.Imagen FROM Proyecto.Productos INNER JOIN Proyecto.Videojuegos INNER JOIN Proyecto.Plataformas ON Productos.IdVideojuego = Videojuegos.idVideojuego AND Productos.IdPlataforma = Plataformas.idPlataforma WHERE Productos.IdPlataforma = $id";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>