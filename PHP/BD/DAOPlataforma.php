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
?>