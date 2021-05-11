<?php
    require "BD/ConectorBD.php";
    require "BD/DAOMapa.php";
    //Recogemos los valores del formulario.
    $nombre = $_POST["nombre"];
    $historia = $_POST["historia"];
    $dlc = $_POST["dlc"];
    $publicacion = $_POST["publicacion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $compania = $_POST["compania"];
    $descripcion = $_POST["descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaNombreMapa = consultaNombreMapa($conexion, $nombre);
    if(mysqli_num_rows($consultaNombreMapa) != 0)
    {
        header("Location: InsertarMapa.php?error=nombreMapaExiste");
    }
    else
    {
        //Lanzamos la consulta.
        $consulta = insertarMapa($conexion, $nombre, $publicacion, $precio, $stock, $descripcion, $imagen, $dlc, $compania, $historia);
        header("Location: MostrarMapas.php");
    }
?>