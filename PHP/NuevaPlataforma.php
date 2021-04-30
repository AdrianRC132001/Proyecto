<?php
    require "BD/ConectorBD.php";
    require "BD/DAOPlataforma.php";
    //Recogemos los valores del formulario.
    $nombre = $_POST["nombre"];
    $lanzamiento = $_POST["lanzamiento"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $compania = $_POST["compania"];
    $descripcion = $_POST["descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaNombre = consultaNombre($conexion, $nombre);
    if(mysqli_num_rows($consultaNombre) != 0)
    {
        header("Location: InsertarPlataforma.php?error=nombrePlataformaExiste");
    }
    else
    {
        //Lanzamos la consulta.
        $consulta = insertarPlataforma($conexion, $nombre, $lanzamiento, $precio, $stock, $descripcion, $imagen, $logo, $compania);
        header("Location: Admin.php");
    }
?>