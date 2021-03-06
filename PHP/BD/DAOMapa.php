<?php
    function consultaMapa($conexion)
	{
		$consulta = "SELECT idMapa, Imagen FROM Mapas ORDER BY rand() LIMIT 4";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarMapa($conexion, $nombre, $publicacion, $precio, $stock, $descripcion, $imagen, $dlc, $compania, $historia, $plataforma, $videojuego)
	{
        $consulta = "INSERT INTO Mapas(Nombre, Publicación, Precio, Stock, Descripción, Imagen, DLC, Compañía, Historia, Plataforma, Videojuego) VALUES('$nombre', '$publicacion', '$precio', '$stock', '$descripcion', '$imagen', '$dlc', '$compania', '$historia', '$plataforma', '$videojuego')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function borrarMapa($conexion, $idMapa)
	{
        $consulta = "DELETE FROM `Proyecto`.`Mapas` WHERE(`idMapa` = '$idMapa')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function modificarMapa($conexion, $nombre, $publicacion, $precio, $stock, $descripcion, $compania, $dlc, $historia, $plataforma, $videojuego, $idMapa)
	{
        $consulta = "UPDATE `Proyecto`.`Mapas` SET `Nombre` = '$nombre', `Publicación` = '$publicacion', `Precio` = '$precio', `Stock` = '$stock', `Descripción` = '$descripcion', `Compañía` = '$compania', `DLC` = '$dlc', `Historia` = '$historia', `Plataforma` = '$plataforma', `Videojuego` = '$videojuego' WHERE(`idMapa` = '$idMapa')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarMapa($conexion)
	{
        $consulta = "SELECT * FROM Mapas";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function detallesMapa($conexion, $idMapa)
	{
		$consulta = "SELECT * FROM Mapas WHERE(`idMapa` = '$idMapa')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
    function consultaNombreMapa($conexion, $nombre)
	{
		$consulta = "SELECT * FROM Mapas WHERE Nombre = '$nombre'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
    function modificarImagenMapa($conexion, $imagen, $idMapa)
	{
		$consulta = "UPDATE `Proyecto`.`Mapas` SET `Imagen` = '$imagen' WHERE(`idMapa` = '$idMapa')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function campoBuscarMapa($conexion, $variableBusqueda)
	{
		$consulta = "SELECT * FROM Mapas WHERE idMapa LIKE '%$variableBusqueda%' OR Nombre LIKE '%$variableBusqueda%' OR Publicación LIKE '%$variableBusqueda%' OR Precio LIKE '%$variableBusqueda%' OR Stock LIKE '%$variableBusqueda%' OR Compañía LIKE '%$variableBusqueda%' OR DLC LIKE '%$variableBusqueda%' OR Historia LIKE '%$variableBusqueda%' OR Plataforma LIKE '%$variableBusqueda%' OR Videojuego LIKE '%$variableBusqueda%';";
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
    function insertarComentarioMapa($conexion, $idUsuario, $idMapa, $comentario, $nick)
	{
		$consulta = "INSERT INTO `Proyecto`.`Comentarios`(`idComentarioUsuario`, `idComentarioMapa`, `Comentario`, `Nick`) VALUES('$idUsuario', '$idMapa', '$comentario', '$nick')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function borrarComentarioMapa($conexion, $idComentario)
	{
		$consulta = "DELETE FROM `Proyecto`.`Comentarios` WHERE(`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
	}
	function mostrarComentarioMapa($conexion, $idMapa)
	{
		$consulta = "SELECT * FROM Proyecto.Comentarios WHERE idComentarioMapa = '$idMapa'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function mostrarPuntuacionMapa($conexion, $idMapa, $idUsuario)
	{
		$consulta = "SELECT * FROM Proyecto.Valoración WHERE idPuntuaciónMapa = '$idMapa' AND idPuntuaciónUsuario = '$idUsuario'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function modificarPuntuacionMapa($conexion, $puntuacion, $idMapa, $idUsuario)
	{
		$consulta = "UPDATE `Proyecto`.`Valoración` SET `Puntuación` = '$puntuacion' WHERE(`idPuntuaciónMapa` = '$idMapa' AND `idPuntuaciónUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarPuntuacionMapa($conexion, $idMapa, $idUsuario, $puntuacion)
	{
		$consulta = "INSERT INTO `Proyecto`.`Valoración`(`idPuntuaciónUsuario`, `idPuntuaciónMapa`, `Puntuación`) VALUES('$idUsuario', '$idMapa', '$puntuacion')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function mediaMapa($conexion, $idMapa)
	{
		$consulta = "SELECT format(avg(Puntuación),1) FROM Proyecto.Valoración WHERE idPuntuaciónMapa = '$idMapa'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
?>