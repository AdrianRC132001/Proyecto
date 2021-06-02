<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
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
                        <a class="nav-link active" href="EasterEggsEHistoria.php">Easter Eggs e Historia<span class="sr-only">Easter Eggs e Historia</span></a>
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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="link" href="EasterEggsEHistoria.php">Easter Eggs e Historia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Call of Duty Black Ops III</li>
                        </ol>
                    </nav>
                    <div class="container">
                        <div class="row margen">
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 1</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/HtEAR7aD2HQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 2</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/lrxk0UT0usU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 3</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/G0jPRDb3Et4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 4</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/69MF3FyttV4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 5</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/iQMOm0LRndk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 6</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/ofidNzc7gjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 7</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/xKJCru_Z-1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 8</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/ZZiZ3e7kJfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 9</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/jfAIrRKCVs4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 10</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/6fpnuCov8iQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Call of Duty Black Ops III Campaña Zombie Misión 11</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/3lg0C62Ld8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Shadows of Evil</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/pqXD0po6xzo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de The Giant</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/yyCsSyhqk4k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Der Eisendrache</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/aFiCnm-Qsq8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Zetsubou No Shima</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/ke4BgFwHc38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Gorod Krovi</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/0dD5O8xcwHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Revelations</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/J8RLrKSuV9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Nacht der Untoten</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/_zrIUxoaglM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Verrückt</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/du6KFlWCviU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Shi No Numa</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/au4EbUDqbc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Kino der Toten</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/5BxUitb0Dzo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Ascension</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/iG9Iul-ybak" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Shangri-la</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/yy9Rxt43soA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Moon</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/pS-WDXpieas" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="titulo"><i>Easter Egg de Origins</i></h2>
                            <div class="col-md-12 mb-3">
                                <iframe width="300" height="250" src="https://www.youtube.com/embed/OopU03SiA_U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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