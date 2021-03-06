<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
	require "BD/DAOPlataforma.php";
    session_start();
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $idPlataforma = $_GET["idPlataforma"];
    $consulta = detallesPlataforma($conexion, $idPlataforma);
    $mostrar = mysqli_fetch_assoc($consulta);
    $rol = $_SESSION['Rol'];
    if($rol != "admin")
    {
        header("Location: Home.php");
    }
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
        <!--Loader.-->
        <div class="lds-roller loader" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><p class="loaderText">Cargando...</p></div>
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
                        <a class="nav-link" href="EasterEggsEHistoria.php">Easter Eggs e Historia<span class="sr-only">Easter Eggs e Historia</span></a>
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
                    <h1 class="titulo"><i>Datos de la plataforma: <?php echo $mostrar['Nombre'];?></i></h1>
                    <form id="plataforma" name="plataforma" action="PlataformaModificada.php" method="POST" enctype="multipart/form-data" novalidate onsubmit="return validarFormulario();">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="rojo">Nombre:</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" minlength="1" maxlength="45" placeholder="Nombre de la plataforma" value="<?php echo $mostrar['Nombre'];?>" required autofocus>
                                <span class="amarillo" id="errorNombre">Nombre no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Lanzamiento:</label>
                                <input class="form-control" type="date" id="lanzamiento" name="lanzamiento" value="<?php echo $mostrar['Lanzamiento'];?>">
                                <span class="amarillo" id="errorLanzamiento">Fecha de lanzamiento no válida.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Precio:</label>
                                <input class="form-control" type="number" name="precio" id="precio" step="any" value="<?php echo $mostrar['Precio'];?>" required>
                                <span class="amarillo" id="errorPrecio">Precio no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Stock:</label>
                                <input class="form-control" type="number" name="stock" id="stock" value="<?php echo $mostrar['Stock'];?>" required>
                                <span class="amarillo" id="errorStock">Stock no válido.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Compañía:</label>
                                <input class="form-control" type="text" name="compania" id="compania" minlength="1" maxlength="45" placeholder="Compañía desarrolladora de la plataforma" value="<?php echo $mostrar['Compañía'];?>" required>
                                <span class="amarillo" id="errorCompania">Compañía no válida.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="rojo">Descripción:</label>
                                <textarea class="form-control" type="text" name="descripcion" id="descripcion" minlength="1" maxlength="1000" placeholder="Introduzca aquí información adicional..." cols="30" rows="5" required><?php echo $mostrar['Descripción'];?></textarea>
                                <span class="amarillo" id="errorDescripcion">Descripción no válida.</span>
                                <br>
                                <span class="rojo" id="caracteres"></span>
                            </div>
                            <div id="mensaje">
                                <span class="amarillo" id="errorMensaje">Por favor, rellene el formulario correctamente.</span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-danger btn-block" type="submit" name="boton" value="Aceptar" id="boton">Aceptar</button>
                        </div>
                        <input type="hidden" name="idPlataforma" value="<?php echo $idPlataforma?>">
                    </form>
                    <center><a class="link" href="MostrarPlataformas.php">Cancelar</a></center>
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
        <!--Scripts Font Awesome para los iconos.-->
        <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
        <!--Script para el footer.-->
		<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
        <script src="../JavaScript/ModificarPlataforma.js"></script>
	</body>
</html>