<?php
    require "BD/ConectorBD.php";
    require "BD/DAOMerchandising.php";
    //Recogemos los valores del formulario.
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $descripcion = $_POST["descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaNombreMerchandising = consultaNombreMerchandising($conexion, $nombre);
    if(mysqli_num_rows($consultaNombreMerchandising) != 0)
    {
        header("Location: InsertarMerchandising.php?error=nombreMerchandisingExiste");
    }
    else
    {
        //Lanzamos la consulta.
        $consulta = insertarMerchandising($conexion, $nombre, $precio, $stock, $descripcion, $imagen);
        header("Location: MostrarMerchandising.php");
    }
?>