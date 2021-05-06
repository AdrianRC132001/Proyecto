<?php
    require "BD/ConectorBD.php";
    require "BD/DAOVideojuego.php";
    //Recogemos los valores del formulario.
    $titulo = $_POST["titulo"];
    $publicacion = $_POST["publicacion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $compania = $_POST["compania"];
    $descripcion = $_POST["descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaTitulo = consultaTitulo($conexion, $titulo);
    if(mysqli_num_rows($consultaTitulo) != 0)
    {
        header("Location: InsertarVideojuego.php?error=tituloVideojuegoExiste");
    }
    else
    {
        //Lanzamos la consulta.
        $consulta = insertarVideojuego($conexion, $titulo, $compania, $publicacion, $descripcion, $imagen, $stock, $logo, $precio);
        header("Location: MostrarVideojuegos.php");
    }
?>