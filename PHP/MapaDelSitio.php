<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
    session_start();
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
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
                    <h1 class="titulo"><i>Mapa del sitio</i></h1>
                    <div class="container">
                        <div class="row margen">
                            <div class="col-md-4">
                                <li class="link"><a class="link" href="Home.php">Home</a></li>
                                <li class="link"><a class="link" href="Plataformas.php">Plataformas</a></li>
                                <li class="link"><a class="link" href="Videojuegos.php">Videojuegos</a></li>
                                <li class="link"><a class="link" href="Mapas.php">Mapas</a></li>
                                <li class="link"><a class="link" href="Merchandising.php">Merchandising</a></li>
                            </div>
                            <div class="col-md-4">
                                <li class="link"><a class="link" href="EasterEggsEHistoria.php">Easter Eggs e Historia</a></li>
                                <ul>
                                    <li class="link"><a class="link" href="https://lahistoriaocultacodz.blogspot.com/">La Historia Oculta Call of Duty Zombies</a></li>
                                    <li class="link"><a class="link" href="https://www.youtube.com/watch?v=lYpio2tG-BE&list=PLMwwrqX1Ir2fC14kulxlzHDBYE0CEx7UP">Música de la saga</a></li>
                                    <li class="link"><a class="link" href="https://www.youtube.com/watch?v=8linO6mCUnU&list=PLMwwrqX1Ir2cYZMJUdynzFZf297LIcgAK">Easter Eggs de Treyarch</a></li>
                                    <ul>
                                        <li class="link"><a class="link" href="CallOfDutyWorldAtWar.php">Call of Duty World at War</a></li>
                                        <li class="link"><a class="link" href="CallOfDutyBlackOps.php">Call of Duty Black Ops</a></li>
                                        <li class="link"><a class="link" href="CallOfDutyBlackOpsII.php">Call of Duty Black Ops II</a></li>
                                        <li class="link"><a class="link" href="CallOfDutyBlackOpsIII.php">Call of Duty Black Ops III</a></li>
                                        <li class="link"><a class="link" href="CallOfDutyBlackOpsIIII.php">Call of Duty Black Ops IIII</a></li>                              
                                    </ul>
                                    <li class="link"><a class="link" href="https://www.youtube.com/watch?v=7sURl24c208&list=PLMwwrqX1Ir2ebyOWoUs-4IjSqdmmFkhP-">Easter Eggs de Infinity Ward</a></li>
                                    <ul>
                                        <li class="link"><a class="link" href="CallOfDutyGhosts.php">Call of Duty Ghosts</a></li>
                                        <li class="link"><a class="link" href="CallOfDutyInfiniteWarfare.php">Call of Duty Infinite Warfare</a></li>                            
                                    </ul>
                                    <li class="link"><a class="link" href="https://www.youtube.com/watch?v=aMyOxTeJ6ho&list=PLMwwrqX1Ir2dyBKPx2hHR9PWyRSPja_1_">Easter Eggs de Sledgehammer Games</a></li>
                                    <ul>
                                        <li class="link"><a class="link" href="CallOfDutyAdvancedWarfare.php">Call of Duty Advanced Warfare</a></li>
                                        <li class="link"><a class="link" href="CallOfDutyWWII.php">Call of Duty WWII</a></li>                            
                                    </ul>                   
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <?php
                                    if($_SESSION["Rol"] == "admin")
                                    {
                                        echo '
                                            <li class="link"><a class="link" href="Carrito.php">Carrito</a></li>
                                            <li class="link"><a class="link" href="Admin.php">Panel de administración</a></li>
                                            <li class="link"><a class="link" href="Perfil.php">Perfil</a></li>
                                        ';
                                    }
                                    else if($_SESSION["Rol"] == "usuario")
                                    {
                                        echo '
                                            <li class="link"><a class="link" href="Carrito.php">Carrito</a></li>
                                            <li class="link"><a class="link" href="Perfil.php">Perfil</a></li>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
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
	</body>
</html>