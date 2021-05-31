<?php
    function consultaPlataforma($conexion)
	{
		$consulta = "SELECT idPlataforma, Imagen FROM Plataformas ORDER BY rand() LIMIT 4";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarPlataforma($conexion, $nombre, $lanzamiento, $precio, $stock, $descripcion, $imagen, $logo, $compania)
	{
        $consulta = "INSERT INTO Plataformas(Nombre, Lanzamiento, Precio, Stock, Descripción, Imagen, Logo, Compañía) VALUES('$nombre', '$lanzamiento', '$precio', '$stock', '$descripcion', '$imagen', '$logo', '$compania')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarPlataforma($conexion, $idPlataforma)
	{
        $consulta = "DELETE FROM `Proyecto`.`Plataformas` WHERE(`idPlataforma` = '$idPlataforma')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function modificarPlataforma($conexion, $nombre, $lanzamiento, $precio, $stock, $descripcion, $compania, $idPlataforma)
	{
        $consulta = "UPDATE `Proyecto`.`Plataformas` SET `Nombre` = '$nombre', `Lanzamiento` = '$lanzamiento', `Precio` = '$precio', `Stock` = '$stock', `Descripción` = '$descripcion', `Compañía` = '$compania' WHERE(`idPlataforma` = '$idPlataforma')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarPlataforma($conexion)
	{
        $consulta = "SELECT * FROM Plataformas";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function detallesPlataforma($conexion, $idPlataforma)
	{
		$consulta = "SELECT * FROM Plataformas WHERE(`idPlataforma` = '$idPlataforma')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
    function consultaNombre($conexion, $nombre)
	{
		$consulta = "SELECT * FROM Plataformas WHERE Nombre = '$nombre'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function modificarImagenPlataforma($conexion, $imagen, $idPlataforma)
	{
		$consulta = "UPDATE `Proyecto`.`Plataformas` SET `Imagen` = '$imagen' WHERE(`idPlataforma` = '$idPlataforma')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function modificarLogoPlataforma($conexion, $logo, $idPlataforma)
	{
		$consulta = "UPDATE `Proyecto`.`Plataformas` SET `Logo` = '$logo' WHERE(`idPlataforma` = '$idPlataforma')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function campoBuscarPlataforma($conexion, $variableBusqueda)
	{
		$consulta = "SELECT * FROM Plataformas WHERE idPlataforma LIKE '%$variableBusqueda%' OR Nombre LIKE '%$variableBusqueda%' OR Lanzamiento LIKE '%$variableBusqueda%' OR Precio LIKE '%$variableBusqueda%' OR Stock LIKE '%$variableBusqueda%' OR Compañía LIKE '%$variableBusqueda%';";
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
	function buscarPlataformaCarrito($conexion, $idPlataforma, $idCesta)
	{
		$consulta = "SELECT * FROM Proyecto.Items WHERE idCesta = '$idCesta' AND idProductoPlataforma = '$idPlataforma'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function sumarCantidadPlataforma($conexion, $idPlataforma)
	{
		$consulta = "UPDATE `Proyecto`.`Items` SET `Cantidad` = Cantidad + 1 WHERE(`idProductoPlataforma` = '$idPlataforma')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarPlataformaCarrito($conexion, $idPlataforma, $idCesta, $cantidad, $precio, $nombre, $stock)
	{
		$consulta = "INSERT INTO `Proyecto`.`Items`(`Cantidad`, `PrecioProducto`, `idCesta`, `idProductoPlataforma`, `NombreProducto`, `StockProducto`) VALUES('$cantidad', '$precio', '$idCesta', '$idPlataforma', '$nombre', '$stock')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarComentarioPlataforma($conexion, $idUsuario, $idPlataforma, $comentario, $nick)
	{
		$consulta = "INSERT INTO `Proyecto`.`Comentarios`(`idComentarioUsuario`, `idComentarioPlataforma`, `Comentario`, `Nick`) VALUES('$idUsuario', '$idPlataforma', '$comentario', '$nick')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function borrarComentarioPlataforma($conexion, $idComentario)
	{
		$consulta = "DELETE FROM `Proyecto`.`Comentarios` WHERE(`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
	}
	function mostrarComentarioPlataforma($conexion, $idPlataforma)
	{
		$consulta = "SELECT * FROM Proyecto.Comentarios WHERE idComentarioPlataforma = '$idPlataforma'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
?>