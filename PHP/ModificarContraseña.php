<?php
    require "BD/ConectorBD.php";
    require "BD/DAOUsuario.php";
    use PHPMailer\PHPMailer\PHPMailer;
    //Recogemos el valor del formulario.
    $eMail = $_POST["eMail"];
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $consultaEMail = consultaEMail($conexion, $eMail);
    $datos = mysqli_fetch_assoc($consultaEMail);
    $nick = $datos["Nick"];
    if(mysqli_num_rows($consultaEMail) != 1)
    {
        header("Location: NuevaContraseña.php?error=eMailNoExiste");
    }
    else
    {
        $nombre = "Call of Duty Zombies Full Guide";
        $titulo = "Correo para cambiar su contraseña en Call of Duty Zombies Full Guide";
        $url = "35.180.225.224/Proyecto/PHP/CambiarContraseña.php";
        $texto = "Pulse aquí para cambiar su contraseña.";
        $mensaje = "<a href='$url?nick=$nick'>$texto</a>";
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $titulo = utf8_decode($titulo);
        $mensaje = utf8_decode($mensaje);
        $mail = new PHPMailer();
        //SMTP Settings.
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "adrianreguera2001@gmail.com";
        $mail->Password = "wmrjdybzzdrtxhbw";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        //eMail Settings.
        $mail->isHTML(true);
        $mail->setFrom($eMail, $nombre);
        $mail->addAddress($eMail);
        $mail->Subject = $titulo;
        $mail->Body = $mensaje;
        if($mail->send())
        {
            header('Location: Login.php?action=correoEnviado');
        }
        else
        {
            echo "ERROR";
        }
    }
?>