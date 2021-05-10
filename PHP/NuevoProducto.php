<?php
    require "BD/ConectorBD.php";
    require "BD/DAOProducto.php";
    //Recogemos los valores del formulario.
    $idPlataforma = $_POST["plataforma"];
    $idVideojuego = $_POST["videojuego"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $descripcion = $_POST["descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaNombreProducto = consultaNombreProducto($conexion, $nombre);
    if(mysqli_num_rows($consultaNombreProducto) != 0)
    {
        header("Location: InsertarProducto.php?error=nombreProductoExiste");
    }
    else
    {
        //Lanzamos la consulta.
        $consulta = insertarProducto($conexion, $idPlataforma, $idVideojuego, $stock, $precio, $descripcion, $nombre, $imagen);
        header("Location: MostrarProductos.php");
    }
?>