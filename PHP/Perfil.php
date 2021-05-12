<?php
    require "BD/ConectorBD.php";
	require "BD/DAOUsuario.php";
    session_start();
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    $idUsuario = $_SESSION["idUsuario"];
    $consulta = mostrarPerfil($conexion, $idUsuario);
    $mostrar = mysqli_fetch_assoc($consulta);
    $rol = $_SESSION['Rol'];
    if(($rol != "admin") && ($rol != "usuario"))
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
                    <h1 class="titulo"><i>Mi perfil</i></h1>
                    <br>
                    <h2 class="tituloPerfil"><i>Acerca de mí</i></h2>
                    <br>
                    <div class="fotoPerfil">
                        <figure>
                            <a href="#" data-toggle="modal" data-target="#foto"><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Foto']);?>" class="img-responsive" width="120vh" height="120vh" alt="Foto de perfil"></a>
                            <div class="capa">
                                <a class="link" href="#" data-toggle="modal" data-target="#foto"><p class="capa"><i class="fas fa-pen"></i>&nbsp;Editar</p></a>
                            </div>
                        </figure>
                    </div>
                    <br>
                    <span class="spanPerfil"><u><b>Descripción:</b></u> <?php echo $mostrar["Descripción"]?></span>
                    <br>
                    <br>
                    <h2 class="tituloPerfil"><i>Datos personales</i></h2>
                    <br>
                    <span class="spanPerfil"><u><b>ID:</b></u> <?php echo $mostrar["idUsuario"]?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Nick:</b></u> <?php echo $mostrar['Nick']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Password:</b></u> <?php echo $mostrar['Password']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Nombre:</b></u> <?php echo $mostrar['Nombre']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Primer apellido:</b></u> <?php echo $mostrar['Apellido1']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>2º apellido:</b></u> <?php echo $mostrar['Apellido2']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>DNI:</b></u> <?php echo $mostrar['DNI']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Fecha de nacimiento:</b></u> <?php echo $mostrar['FechaDeNacimiento']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Teléfono:</b></u> <?php echo $mostrar['Teléfono']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>eMail:</b></u> <?php echo $mostrar['eMail']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Código Postal:</b></u> <?php echo $mostrar['CP']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Comunidad Autónoma:</b></u> <?php echo $mostrar['CA']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Provincia:</b></u> <?php echo $mostrar['Provincia']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Dirección:</b></u> <?php echo $mostrar['Dirección']?></span>
                    <br>
                    <br>
                    <span class="spanPerfil"><u><b>Rol:</b></u> <?php echo $mostrar['Rol']?></span>
                    <br>
                    <br>
                    <a class="btn btn-primary" href="ModificarPerfil.php?idUsuario=<?php echo $_SESSION['idUsuario'];?>" value="Editar" name="modificarPerfil"><i class="fas fa-user-edit"></i>&nbsp;Editar</a>&nbsp;<a class="btn btn-danger" href="BajaUsuario.php?idUsuario=<?php echo $_SESSION['idUsuario'];?>" value="Dar de baja" name="bajaUsuario"><i class="fas fa-user-times"></i>&nbsp;Dar de baja</a>
                </div>
                <div class="col-md-3 marco d-none d-sm-none d-md-block">
                    <?php include_once "MenúUsuario.php"?>
                </div>
            </div>
        </div>
        <?php include_once "VentanaEmergenteFoto.php"?>
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