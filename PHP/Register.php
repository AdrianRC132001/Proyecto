<?php
    require "BD/ConectorBD.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
	<!--Cabecera del código.-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Call of Duty Zombies Full Guide</title>
		<link rel="icon" href="../img/Logo.ico">
 		<!--Enlace al fichero CSS.-->
		<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
		<!--Links para las fuentes de Google Fonts.-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <!--Link para la versión de Bootstrap.-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!--Links para el footer.-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <script src="../JavaScript/Loader.js"></script>
	</head>
	<!--Cuerpo del código.-->
	<body class="fondo">
		<div class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="Home.php">
                    <img src="../img/Logo.png" width="100" height="44" class="d-inline-block align-top logo" alt="Call of Duty Zombies Full Guide">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="Home.php">Home<span class="sr-only">Home</span></a>
                        <a class="nav-link" href="Plataformas.php">Plataformas<span class="sr-only">Plataformas</span></a>
						<a class="nav-link" href="Videojuegos.php">Videojuegos<span class="sr-only">Videojuegos</span></a>
						<a class="nav-link" href="Mapas.php">Mapas<span class="sr-only">Mapas</span></a>
                        <a class="nav-link" href="Merchandising.php">Merchandising<span class="sr-only">Merchandising</span></a>
                        <div class="nav-link d-block d-sm-block d-md-none">
                            <?php include_once "MenúUsuarioMóvil.php"?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <br>
        <div class="container contenedor">
            <div class="row margen">
                <div class="col-md-8">
                    <h1 class="titulo"><i>Registro</i></h1>
                    <form id="register" name="register" action="UsuarioRegistrado.php" method="POST" enctype="multipart/form-data" novalidate onsubmit="return validarFormulario();">
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "nickExiste")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "El nombre de usuario introducido ya existe.</h4>";
                                }
                            ?>
                        </p>
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "passwordExiste")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "La contraseña introducida ya existe.</h4>";
                                }
                            ?>
                        </p>
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "eMailExiste")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "El eMail introducido ya existe.</h4>";
                                }
                            ?>
                        </p>
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "telefonoExiste")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "El número de teléfono introducido ya existe.</h4>";
                                }
                            ?>
                        </p>
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "dniExiste")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "El DNI introducido ya existe.</h4>";
                                }
                            ?>
                        </p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="rojo">Nick:</label>
                                <input class="form-control" type="text" name="nick" id="nick" minlength="1" maxlength="45" placeholder="Mínimo un carácter y sin espacios" required autofocus>
                                <span class="amarillo" id="errorNick">Nombre de usuario no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">eMail:</label>
                                <input class="form-control" type="text" name="eMail" id="eMail" minlength="1" maxlength="45" placeholder="dirección@email.dominio" required>
                                <span class="amarillo" id="errorEMail">Dirección de correo electrónico no válida.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Password:</label>
                                <div class="input-group">
                                    <input class="form-control" type="password" name="password" id="password" minlength="8" maxlength="45" placeholder="Mínimo 8 carácteres y sin espacios" required>
                                    <div class="input-group-append">
                                        <button id="show_password" class="btn btn-danger" type="button" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button>
                                    </div>
                                </div>
                                <span class="amarillo" id="errorPassword">La contraseña debe contener al menos una letra mayúscula, al menos una letra minúscula y al menos un dígito.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Confirm password:</label>
                                <div class="input-group">
                                    <input class="form-control" type="password" name="password2" id="password2" minlength="8" maxlength="45" placeholder="Mínimo 8 carácteres y sin espacios" required>
                                    <div class="input-group-append">
                                        <button id="show_password2" class="btn btn-danger" type="button" onclick="mostrarPassword2()"><span class="fa fa-eye-slash icon2"></span></button>
                                    </div>
                                </div>
                                <span class="amarillo" id="errorPassword2">Las contraseñas no coinciden.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Nombre:</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" minlength="1" maxlength="45" placeholder="Nombre del usuario" required>
                                <span class="amarillo" id="errorNombre">Nombre no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Primer apellido:</label>
                                <input class="form-control" type="text" name="apellido1" id="apellido1" minlength="1" maxlength="45" placeholder="Primer apellido del usuario" required>
                                <span class="amarillo" id="errorApellido1">Apellido no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">2º apellido:</label>
                                <input class="form-control" type="text" name="apellido2" id="apellido2" minlength="1" maxlength="45" placeholder="2º apellido del usuario" required>
                                <span class="amarillo" id="errorApellido2">Apellido no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Teléfono:</label>
                                <input class="form-control" type="text" name="telefono" id="telefono" minlength="1" maxlength="45" placeholder="0123456789" required>
                                <span class="amarillo" id="errorTelefono">Nº de teléfono no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">DNI:</label>
                                <input class="form-control" type="text" name="dni" id="dni" minlength="9" maxlength="9" placeholder="12345678X" required>
                                <span class="amarillo" id="errorDNI">DNI no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Código postal:</label>
                                <input class="form-control" type="number" name="cp" id="cp" minlength="5" maxlength="5" placeholder="12345" required>
                                <span class="amarillo" id="errorCP">Código postal no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Comunidad Autónoma:</label>
                                <input class="form-control" type="text" name="ca" id="ca" minlength="1" maxlength="45" placeholder="Ejemplo: Andalucía" required>
                                <span class="amarillo" id="errorCA">Comunidad Autónoma no válida.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Provincia:</label>
                                <input class="form-control" type="text" name="provincia" id="provincia" minlength="1" maxlength="45" placeholder="Ejemplo: Sevilla" required>
                                <span class="amarillo" id="errorProvincia">Provincia no válida.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Descripción:</label>
                                <textarea class="form-control" type="text" name="descripcion" id="descripcion" minlength="0" maxlength="1000" placeholder="Introduzca aquí información adicional..." cols="30" rows="5" required></textarea>
                                <span class="amarillo" id="errorDescripcion">Descripción no válida.</span>
                                <br>
                                <span class="rojo" id="caracteres"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Foto de perfil:</label>
                                <input type="file" name="foto" id="foto" class="rojo">
                            </div>
                            <div>
                                <label class="rojo">
                                    <input type="checkbox" name="terminos" id="terminos">&nbsp;Acepto los términos y condiciones de uso de esta página web.<inpunt>
                                </label>
                            </div>
                            <div id="mensaje">
                                <span class="amarillo" id="errorMensaje">Por favor, rellene el formulario correctamente.</span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-danger btn-block" type="submit" name="boton" value="Register" id="boton">Register</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 marco d-none d-sm-none d-md-block">
                    <?php include_once "MenúUsuario.php"?>
                </div>
            </div>
        </div>
        <!--Ventana emergente para confirmar el cierre de la sesión.-->
        <?php include_once "VentanaEmergenteLogout.php"?>
        <br>
        <?php include_once "Footer.php"?>
		<!--Loader.-->
        <div class="lds-roller loader" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><p class="loaderText">Cargando...</p></div>
        <!--Scripts Font Awesome para los iconos.-->
        <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
        <!--Script para el footer.-->
		<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
        <script src="../JavaScript/Register.js"></script>
	</body>
</html>