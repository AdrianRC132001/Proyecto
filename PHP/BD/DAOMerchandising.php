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
		return $resultado;
	}
?>