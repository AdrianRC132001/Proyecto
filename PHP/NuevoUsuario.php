<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    //Recogemos los valores del formulario.
    $nick = $_POST["nick"];
    $eMail = $_POST["eMail"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    $cp = $_POST["cp"];
    $ca = $_POST["ca"];
    $provincia = $_POST["provincia"];
    $descripcion = $_POST["descripcion"];
    $direccion = $_POST["direccion"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $rol = $_POST["rol"];
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaNick = consultaNick($conexion, $nick);
    $consultaPassword = consultaPassword($conexion, $password);
    $consultaEMail = consultaEMail($conexion, $eMail);
    $consultaTelefono = consultaTelefono($conexion, $telefono);
    $consultaDNI = consultaDNI($conexion, $dni);
    if(mysqli_num_rows($consultaNick) != 0)
    {
        header("Location: InsertarUsuario.php?error=nickExiste");
    }
    else if(mysqli_num_rows($consultaEMail) != 0)
    {
        header("Location: InsertarUsuario.php?error=eMailExiste");
    }
    else if(mysqli_num_rows($consultaTelefono) != 0)
    {
        header("Location: InsertarUsuario.php?error=telefonoExiste");
    }
    else if(mysqli_num_rows($consultaDNI) != 0)
    {
        header("Location: InsertarUsuario.php?error=dniExiste");
    }
    else
    {
        //Lanzamos la consulta.
        $consulta = insertarUsuario($conexion, $nick, $password, $nombre, $apellido1, $apellido2, $telefono, $eMail, $cp, $provincia, $ca, $rol, $dni, $foto, $descripcion, $direccion, $fechaNacimiento);
        header("Location: MostrarUsuarios.php");
    }
?>