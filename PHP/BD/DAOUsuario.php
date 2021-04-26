<?php
    function consultaLogin($conexion, $nick, $password)
	{
		$consulta = "SELECT * FROM Usuarios WHERE Nick = '$nick' AND Password = '$password'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function crearSesion($nick)
	{
		//Pongo el ID de "SESSION" con el usuario.
		session_id($nick['Nick']);
		//Creo la sesión.
		session_start();
		//Almacenamos todos los datos de la sesión.
		$_SESSION['idUsuario'] = $nick['idUsuario'];
		$_SESSION['Nick'] = $nick['Nick'];
        $_SESSION['Password'] = $nick['Password'];
        $_SESSION['Nombre'] = $nick['Nombre'];
        $_SESSION['Apellido1'] = $nick['Apellido1'];
        $_SESSION['Apellido2'] = $nick['Apellido2'];
        $_SESSION['Teléfono'] = $nick['Teléfono'];
		$_SESSION['eMail'] = $nick['eMail'];
        $_SESSION['CP'] = $nick['CP'];
        $_SESSION['Provincia'] = $nick['Provincia'];
        $_SESSION['CA'] = $nick['CA'];
		$_SESSION['Rol'] = $nick['Rol'];
		$_SESSION['DNI'] = $nick['DNI'];
		$_SESSION['Foto'] = $nick['Foto'];
		$_SESSION['Descripción'] = $nick['Descripción'];
	}
	function consultaNick($conexion, $nick)
	{
		$consulta = "SELECT * FROM Usuarios WHERE Nick = '$nick'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
	function consultaNueva($conexion, $eMail, $password)
	{
		$consulta = "SELECT * FROM Usuarios WHERE eMail = '$eMail' AND Password = '$password'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function insertarUsuarios($conexion, $nick, $password, $nombre, $apellido1, $apellido2, $telefono, $eMail, $cp, $provincia, $ca, $rol, $dni, $foto, $descripcion)
    {
        $sql = "INSERT INTO Usuarios(Nick, Password, Nombre, Apellido1, Apellido2, Teléfono, eMail, CP, Provincia, CA, Rol, DNI, Foto, Descripción) VALUES('$nick', '$password', '$nombre', '$apellido1', '$apellido2', '$telefono', '$eMail', '$cp', '$provincia', '$ca', '$rol', '$dni', '$foto', '$descripcion')";
        if(mysqli_query($conexion, $sql))
        {
            echo "<h1 class='titulo'><i>¡Registro correcto!</i></h1>";
        }
        else
        {
            echo "Error: " . $sql . " " . mysqli_error($conexion);
        }
        $conexion->close();
    }
	function consultaEMail($conexion, $eMail)
	{
		$consulta = "SELECT * FROM Usuarios WHERE eMail = '$eMail'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function mostrarUsuario($conexion)
	{
		$consulta = "SELECT * FROM Usuarios";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
	function modificarUsuario($conexion, $rol, $idUsuario)
	{
		$consulta = "UPDATE `Proyecto`.`Usuarios` SET `Rol` = '$rol' WHERE(`idUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function modificarPerfil($conexion, $nick, $password, $nombre, $apellido1, $apellido2, $telefono, $eMail, $cp, $provincia, $ca, $dni, $descripcion, $idUsuario)
	{
		$consulta = "UPDATE `Proyecto`.`Usuarios` SET `Nick` = '$nick', `Password` = '$password', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Teléfono` = '$telefono', `eMail` = '$eMail', `CP` = '$cp', `Provincia` = '$provincia', `CA` = '$ca', `DNI` = '$dni', `Descripción` = '$descripcion' WHERE(`idUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function mostrarPerfil($conexion, $idUsuario)
	{
		$consulta = "SELECT * FROM Usuarios WHERE(`idUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }
	function borrarUsuario($conexion, $idUsuario)
    {
        $consulta = "DELETE FROM `Proyecto`.`Usuarios` WHERE(`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
	function consultaPassword($conexion, $password)
	{
		$consulta = "SELECT * FROM Usuarios WHERE Password = '$password'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function consultaTelefono($conexion, $telefono)
	{
		$consulta = "SELECT * FROM Usuarios WHERE Teléfono = '$telefono'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function consultaDNI($conexion, $dni)
	{
		$consulta = "SELECT * FROM Usuarios WHERE DNI = '$dni'";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
	function modificarFoto($conexion, $foto, $idUsuario)
	{
		$consulta = "UPDATE `Proyecto`.`Usuarios` SET `Foto` = '$foto' WHERE(`idUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
	}
?>