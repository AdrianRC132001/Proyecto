<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    //Recogemos el valor del formulario.
    $eMail = $_POST["eMail"];
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaEMail = consultaEMail($conexion, $eMail);
    if(mysqli_num_rows($consultaEMail) != 1)
    {
        header("Location: NuevaContraseña.php?error=eMailNoExiste");
    }
    else
    {
        header("Location: NuevaContraseña.php");
    }
?>