<?php  
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
	$nick = $_POST["nick"];
	$password = $_POST["password"];	
	$nombre = $_POST["nombre"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
    $telefono = $_POST["telefono"];
    $eMail = $_POST["eMail"];
    $cp = $_POST["cp"];
    $provincia = $_POST["provincia"];
    $ca = $_POST["ca"];
    $dni = $_POST["dni"];
    $descripcion = $_POST["descripcion"];
    $idUsuario = $_POST["idUsuario"];
    $consulta = modificarPerfil($conexion, $nick, $password, $nombre, $apellido1, $apellido2, $telefono, $eMail, $cp, $provincia, $ca, $dni, $descripcion, $idUsuario);
    header("Location: Admin.php");
?>