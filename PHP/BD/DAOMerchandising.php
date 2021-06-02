<?php
    function consultaMerchandising($conexion)
	{
		$consulta = "SELECT idMerchandising, Imagen FROM Merchandising ORDER BY rand() LIMIT 4";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarMerchandising($conexion, $nombre, $precio, $stock, $descripcion, $imagen)
	{
        $consulta = "INSERT INTO Merchandising(Nombre, Precio, Stock, Descripción, Imagen) VALUES('$nombre', '$precio', '$stock', '$descripcion', '$imagen')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarMerchandising($conexion, $idMerchandising)
	{
        $consulta = "DELETE FROM `Proyecto`.`Merchandising` WHERE(`idMerchandising` = '$idMerchandising')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function modificarMerchandising($conexion, $nombre, $precio, $stock, $descripcion, $idMerchandising)
	{
        $consulta = "UPDATE `Proyecto`.`Merchandising` SET `Nombre` = '$nombre', `Precio` = '$precio', `Stock` = '$stock', `Descripción` = '$descripcion' WHERE(`idMerchandising` = '$idMerchandising')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarMerchandising($conexion)
	{
        $consulta = "SELECT * FROM Merchandising";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function detallesMerchandising($conexion, $idMerchandising)
	{
		$consulta = "SELECT * FROM Merchandising WHERE(`idMerchandising` = '$idMerchandising')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
    function consultaNombreMerchandising($conexion, $nombre)
	{
		$consulta = "SELECT * FROM Merchandising WHERE Nombre = '$nombre'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function modificarImagenMerchandising($conexion, $imagen, $idMerchandising)
	{
		$consulta = "UPDATE `Proyecto`.`Merchandising` SET `Imagen` = '$imagen' WHERE(`idMerchandising` = '$idMerchandising')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function campoBuscarMerchandising($conexion, $variableBusqueda)
	{
		$consulta = "SELECT * FROM Merchandising WHERE idMerchandising LIKE '%$variableBusqueda%' OR Nombre LIKE '%$variableBusqueda%' OR Precio LIKE '%$variableBusqueda%' OR Stock LIKE '%$variableBusqueda%';";
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
    function buscarMerchandisingCarrito($conexion, $idMerchandising, $idCesta)
	{
		$consulta = "SELECT * FROM Proyecto.Items WHERE idCesta = '$idCesta' AND idProductoMerchandising = '$idMerchandising'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function sumarCantidadMerchandising($conexion, $idMerchandising)
	{
		$consulta = "UPDATE `Proyecto`.`Items` SET `Cantidad` = Cantidad + 1 WHERE(`idProductoMerchandising` = '$idMerchandising')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarMerchandisingCarrito($conexion, $idMerchandising, $idCesta, $cantidad, $precio, $nombre, $stock)
	{
		$consulta = "INSERT INTO `Proyecto`.`Items`(`Cantidad`, `PrecioProducto`, `idCesta`, `idProductoMerchandising`, `NombreProducto`, `StockProducto`) VALUES('$cantidad', '$precio', '$idCesta', '$idMerchandising', '$nombre', '$stock')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarComentarioMerchandising($conexion, $idUsuario, $idMerchandising, $comentario, $nick)
	{
		$consulta = "INSERT INTO `Proyecto`.`Comentarios`(`idComentarioUsuario`, `idComentarioMerchandising`, `Comentario`, `Nick`) VALUES('$idUsuario', '$idMerchandising', '$comentario', '$nick')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function borrarComentarioMerchandising($conexion, $idComentario)
	{
		$consulta = "DELETE FROM `Proyecto`.`Comentarios` WHERE(`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
	}
	function mostrarComentarioMerchandising($conexion, $idMerchandising)
	{
		$consulta = "SELECT * FROM Proyecto.Comentarios WHERE idComentarioMerchandising = '$idMerchandising'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function mostrarPuntuacionMerchandising($conexion, $idMerchandising, $idUsuario)
	{
		$consulta = "SELECT * FROM Proyecto.Valoración WHERE idPuntuaciónMerchandising = '$idMerchandising' AND idPuntuaciónUsuario = '$idUsuario'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function modificarPuntuacionMerchandising($conexion, $puntuacion, $idMerchandising, $idUsuario)
	{
		$consulta = "UPDATE `Proyecto`.`Valoración` SET `Puntuación` = '$puntuacion' WHERE(`idPuntuaciónMerchandising` = '$idMerchandising' AND `idPuntuaciónUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarPuntuacionMerchandising($conexion, $idMerchandising, $idUsuario, $puntuacion)
	{
		$consulta = "INSERT INTO `Proyecto`.`Valoración`(`idPuntuaciónUsuario`, `idPuntuaciónMerchandising`, `Puntuación`) VALUES('$idUsuario', '$idMerchandising', '$puntuacion')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function mediaMerchandising($conexion, $idMerchandising)
	{
		$consulta = "SELECT format(avg(Puntuación),1) FROM Proyecto.Valoración WHERE idPuntuaciónMerchandising = '$idMerchandising'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
?>