<?php
    function insertarProducto($conexion, $idPlataforma, $idVideojuego, $stock, $precio, $descripcion, $nombre, $imagen)
    {
        $consulta = "INSERT INTO Productos(IdVideojuego, IdPlataforma, Stock, Precio, Descripción, Nombre, Imagen) VALUES('$idVideojuego', '$idPlataforma', '$stock', '$precio', '$descripcion', '$nombre', '$imagen')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarProducto($conexion, $idProducto)
    {
        $consulta = "DELETE FROM `Proyecto`.`Productos` WHERE(`idProducto` = '$idProducto')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function modificarProducto($conexion, $idPlataforma, $idVideojuego, $stock, $precio, $descripcion, $nombre, $idProducto)
    {
        $consulta = "UPDATE `Proyecto`.`Productos` SET `IdPlataforma` = '$idPlataforma', `IdVideojuego` = '$idVideojuego', `Stock` = '$stock', `Precio` = '$precio', `Descripción` = '$descripcion', `Nombre` = '$nombre' WHERE(`idProducto` = '$idProducto')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarProducto($conexion)
    {
        $consulta = "SELECT * FROM Productos";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function filtrarPlataforma($conexion, $id)
    {
        $consulta = "SELECT Productos.idProducto, Plataformas.idPlataforma, Plataformas.Nombre, Plataformas.Logo, Videojuegos.idVideojuego, Videojuegos.Título, Videojuegos.Imagen, Videojuegos.Precio, Videojuegos.Stock FROM Proyecto.Productos INNER JOIN Proyecto.Videojuegos INNER JOIN Proyecto.Plataformas ON Productos.IdVideojuego = Videojuegos.idVideojuego AND Productos.IdPlataforma = Plataformas.idPlataforma WHERE Productos.IdPlataforma = $id";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function filtrarVideojuego($conexion, $id)
    {
        $consulta = "SELECT Productos.idProducto, Plataformas.idPlataforma, Plataformas.Nombre, Plataformas.Imagen, Plataformas.Precio, Plataformas.Stock, Videojuegos.idVideojuego, Videojuegos.Título, Videojuegos.Logo FROM Proyecto.Productos INNER JOIN Proyecto.Videojuegos INNER JOIN Proyecto.Plataformas ON Productos.IdVideojuego = Videojuegos.idVideojuego AND Productos.IdPlataforma = Plataformas.idPlataforma WHERE Productos.IdVideojuego = $id";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function modificarImagenProducto($conexion, $imagen, $idProducto)
	{
		$consulta = "UPDATE `Proyecto`.`Productos` SET `Imagen` = '$imagen' WHERE(`idProducto` = '$idProducto')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function campoBuscarProducto($conexion, $variableBusqueda)
	{
		$consulta = "SELECT * FROM Productos WHERE idProducto LIKE '%$variableBusqueda%' OR Nombre LIKE '%$variableBusqueda%' OR Precio LIKE '%$variableBusqueda%' OR Stock LIKE '%$variableBusqueda%' OR Descripción LIKE '%$variableBusqueda%';";
		$resultado = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($resultado) != 0)
        {
            return $resultado;
        }
        else
        {
            echo "<tr><td><h1 class='titulo'>Sin resultados...&nbsp;<i class='fas fa-frown amarillo'></i></h1></td></tr>";
        }
	}
    function consultaNombreProducto($conexion, $nombre)
	{
		$consulta = "SELECT * FROM Productos WHERE Nombre = '$nombre'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function detallesProducto($conexion, $idProducto)
	{
		$consulta = "SELECT * FROM Productos WHERE(`idProducto` = '$idProducto')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
?>