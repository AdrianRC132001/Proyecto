<?php
	require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
	//Recogemos los valores del formulario.
	$nick = $_POST["nick"];
	$password = $_POST["password"];
	$recaptcha = $_POST['g-recaptcha-response'];
	if(!$recaptcha)
	{
		header("Location: Login.php?error=captcha");
	}
	else
	{
		//Creamos la conexión a la BD.
		$conexion = conectar(true);
		//Lanzamos la consulta.
		$consulta = consultaLogin($conexion, $nick, $password);
		if(mysqli_num_rows($consulta) == 1)
		{
			$fila = mysqli_fetch_assoc($consulta);
			//Creo la sesión del usuario.
			crearSesion($fila);
			header("Location: Home.php");
		}
		else
		{
			$consulta = consultaNick($conexion, $nick);
			if(mysqli_num_rows($consulta) == 1)
			{
				header("Location: Login.php?error=contraseñaIncorrecta");
			}
			else
			{
				header("Location: Login.php?error=usuarioNoExiste");
			}
		}
	}
?>