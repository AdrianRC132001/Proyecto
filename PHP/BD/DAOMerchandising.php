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
	function insertarMerchandisingCarrito($conexion, $idMerchandising, $idCesta, $cantidad, $precio)
	{
		$consulta = "INSERT INTO `Proyecto`.`Items`(`Cantidad`, `Precio`, `idCesta`, `idProductoMerchandising`) VALUES('$cantidad', '$precio', '$idCesta', '$idMerchandising')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
?>