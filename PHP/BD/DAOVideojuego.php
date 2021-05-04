<?php
    function consultaVideojuego($conexion)
	{
		$consulta = "SELECT idVideojuego, Imagen FROM Videojuegos ORDER BY rand() LIMIT 4";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarVideojuego($conexion, $titulo, $compania, $publicacion, $descripcion, $imagen, $stock, $logo, $precio)
	{
        $consulta = "INSERT INTO Videojuegos(Título, Compañía, Publicación, Descripción, Imagen, Stock, Logo, Precio) VALUES('$titulo', '$compania', '$publicacion', '$descripcion', '$imagen', '$stock', '$logo', '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarVideojuego($conexion, $idVideojuego)
	{
        $consulta = "DELETE FROM `Proyecto`.`Videojuegos` WHERE(`idVideojuego` = '$idVideojuego')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
	function modificarVideojuego($conexion, $titulo, $compania, $publicacion, $descripcion, $stock, $precio, $idVideojuego)
	{
        $consulta = "UPDATE `Proyecto`.`Videojuegos` SET `Título` = '$titulo', `Compañía` = '$compania', `Publicación` = '$publicacion', `Descripción` = '$descripcion', `Stock` = '$stock', `Precio` = '$precio' WHERE(`idVideojuego` = '$idVideojuego')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarVideojuego($conexion)
	{
        $consulta = "SELECT * FROM Videojuegos";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function detallesVideojuego($conexion, $idVideojuego)
	{
		$consulta = "SELECT * FROM Videojuegos WHERE(`idVideojuego` = '$idVideojuego')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
    function producto($conexion, $ultimoID, $idPlataforma, $stock, $precio)
    {
        $consulta = "INSERT INTO Productos(IdVideojuego, IdPlataforma, Stock, Precio) VALUES('$ultimoID', '$idPlataforma', '$stock', '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function consultaTitulo($conexion, $titulo)
	{
		$consulta = "SELECT * FROM Videojuegos WHERE Título = '$titulo'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function modificarImagenVideojuego($conexion, $imagen, $idVideojuego)
	{
		$consulta = "UPDATE `Proyecto`.`Videojuegos` SET `Imagen` = '$imagen' WHERE(`idVideojuego` = '$idVideojuego')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function modificarLogoVideojuego($conexion, $logo, $idVideojuego)
	{
		$consulta = "UPDATE `Proyecto`.`Videojuegos` SET `Logo` = '$logo' WHERE(`idVideojuego` = '$idVideojuego')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
?>