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
                    <h1 class="titulo"><i>Iniciar sesión</i></h1>
                    <form id="login" name="login" action="UsuarioLogeado.php" method="POST" novalidate onsubmit="return validarFormulario();">
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "usuarioNoExiste")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "El nombre de usuario introducido no existe.</h4>";
                                }
                            ?>
                        </p>
                        <p>
                            <?php
                                if(isset($_GET['error']) && $_GET['error'] == "contraseñaIncorrecta")
                                {
                                    echo '<h4 class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;' . "Contraseña incorrecta.</h4>";
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
                                <label class="rojo">Password:</label>
                                <input class="form-control" type="password" name="password" id="password" minlength="8" maxlength="45" placeholder="Mínimo 8 carácteres y sin espacios" required>
                                <span class="amarillo" id="errorPassword">Contraseña no válida.</span>
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
                            <button class="btn btn-danger btn-block" type="submit" name="boton" value="Login" id="boton">Login</button>
                        </div>
                        <center><a class="link" href="#">He olvidado mi contraseña</a></center>
                    </form>
                </div>
                <div class="col-md-3 marco d-none d-sm-none d-md-block">
                    <?php include_once "MenúUsuario.php"?>
                </div>
            </div>
        </div>
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
        <script src="../JavaScript/Login.js"></script>
	</body>
</html>