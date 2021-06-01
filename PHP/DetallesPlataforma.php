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
                        <a class="nav-link active" href="Plataformas.php">Plataformas<span class="sr-only">Plataformas</span></a>
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
                    <center>
                        <?php
                            require "BD/DAOPlataforma.php";
                            //Creamos la conexión a la BD.
                            $conexion = conectar(true);
                            $idPlataforma = $_GET["idPlataforma"];
                            $result = detallesPlataforma($conexion, $idPlataforma);
                            while($mostrar = mysqli_fetch_array($result))
                            {
                        ?>
                                <div class="thumbnail">
                                    <h1 class="titulo"><i><?php echo $mostrar['Nombre']?></i></h1>
                                    <br>
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Logo']);?>" class="img-responsive" width="400px" height="200px" alt="Logo">
                                    <br>
                                    <br>
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Imagen']);?>" class="img-responsive" width="400px" height="400px" alt="Plataforma">
                                    <br>
                                    <br>
                                    <h5><p class="rojo"><b>Precio: </b><?php echo $mostrar['Precio']?>€</p></h5>
                                    <h5><p class="rojo"><b>Stock: </b><?php echo $mostrar['Stock']?> unidades</p></h5>
                                    <h5><p class="rojo"><b>Compañía: </b><?php echo $mostrar['Compañía']?></p></h5>
                                    <h5><p class="rojo"><b>Lanzamiento: </b><?php echo $mostrar['Lanzamiento']?></p></h5>
                                    <h5><p class="rojo"><b>Descripción: </b><?php echo $mostrar['Descripción']?></p></h5>
                                </div>
                                <br>
                                <?php
                                    if(($rol == "admin") || ($rol == "usuario"))
                                    {
                                        echo '<div class="mb-3"><a href="CarritoPlataforma.php?idPlataforma=' . $mostrar['idPlataforma'] . '" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;Añadir al carrito</a></div>';
                                    }
                                ?>
                                <br>
                                <a class="link" href="FiltroPlataformas.php?id=<?php echo $mostrar['idPlataforma']?>">Ver videojuegos de la saga disponibles para esta plataforma</a>
                                <br>
                                <?php
                                    $rol = $_SESSION["Rol"];
                                    if($rol == "admin")
                                    {
                                        echo '
                                            <br>
                                                <a class="link" href="MostrarPlataformas.php">Ir al panel de administración</a>
                                            <br>
                                        ';
                                    }
                                ?>
                                <br>
                                <a class="link" href="Plataformas.php">Volver</a>
                        <?php
                            }
                        ?>
                        <br>
                        <br>
                        <?php
                            if(($rol == "admin") || ($rol == "usuario"))
                            {
                                echo '
                                    <div class="col-md-12">
                                        <h1 class="titulo"><i class="fas fa-comments"></i>&nbsp;Comentarios:</h1>
                                        <form id="comentariosPlataforma">
                                            <textarea class="form-control" name="comentarioPlataforma" id="comentarioPlataforma" cols="30" rows="10" placeholder="Introduzca aquí su comentario..."></textarea>
                                            <button class="btn btn-success col-md-12" name="enviar" data-rol=' . $_SESSION["Rol"] . ' data-idPlataforma=' . $_GET["idPlataforma"] . '" data-idUsuario="' . $_SESSION["idUsuario"] . '"><i class="fas fa-share"></i>&nbsp;Enviar</button>
                                            <br>
                                            <br>
                                            <div id="mostrarComentariosPlataforma"></div>
                                        </form>
                                    </div>
                                ';
                            }
                            else
                            {
                                echo '
                                    <div class="col-md-12">
                                        <h1 class="titulo"><i class="fas fa-comments"></i>&nbsp;Comentarios:</h1>
                                        <form id="comentariosPlataforma">
                                            <textarea class="form-control" name="comentarioPlataforma" id="comentarioPlataforma" cols="30" rows="10" style="display:none"></textarea>
                                            <button class="btn btn-success col-md-12" name="enviar" data-rol=' . $_SESSION["Rol"] . ' data-idPlataforma=' . $_GET["idPlataforma"] . '" data-idUsuario="' . $_SESSION["idUsuario"] . '" style="display:none"><i class="fas fa-share"></i>&nbsp;Enviar</button>
                                            <br>
                                            <br>
                                            <div id="mostrarComentariosPlataforma"></div>
                                        </form>
                                    </div>
                                ';
                            }
                        ?>
                    </center>
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
        <!--Script jQuery.-->
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                mostrarComentarioPlataforma();
                $('button[name=enviar]').click(function(e)
                {
                    const postData={
                        idPlataforma:$(this).attr('data-idPlataforma'),
                        idUsuario:$(this).attr('data-idUsuario'),
                        comentarioPlataforma:$('#comentarioPlataforma').val()
                    }
                    $.post('InsertarComentarioPlataforma.php', postData, function(response)
                    {
                        mostrarComentarioPlataforma();
                        $('#comentariosPlataforma').trigger('reset');
                    });
                    e.preventDefault();
                })
                function mostrarComentarioPlataforma()
                {
                    let idPlataforma = $('button[name=enviar]').attr('data-idPlataforma');
                    let rol = $('button[name=enviar]').attr('data-rol');
                    $.ajax(
                    {
                        url:'MostrarComentarioPlataforma.php',
                        type:'GET',
                        data:{'idPlataforma':idPlataforma},
                        success:function numero(response)
                        {
                            let comentarios = JSON.parse(response); 
                            let textarea = '';
                            comentarios.forEach(comentarios => {
                            
                                textarea += `
                                    <br>
                                    <h2 class="titulo">${comentarios.Nick}:</h2>
                                    <textarea class='form-control' cols="30" rows="10" disabled>${comentarios.Comentario}</textarea>
                                    <br>
                                `
                                if(rol == "admin")
                                {
                                    textarea += `
                                        <button name="borrar" id="borrar" class="btn btn-danger col-md-12 borrar" data-id='${comentarios.idComentario}'><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</button>
                                        <br>
                                        <br>
                                    `
                                }
                                else if($('button[name=enviar]').attr('data-idUsuario') == comentarios.idUsuario)
                                {
                                    textarea += `
                                        <button name="borrar" id="borrar" class="btn btn-danger col-md-12 borrar" data-id='${comentarios.idComentario}'><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</button>
                                        <br>
                                        <br>
                                    `
                                }
                            });
                            $('#mostrarComentariosPlataforma').html(textarea);
                        }
                    })
                    $(document).on('click', '.borrar', function(e)
                    {
                        let idComentario = $(this).attr('data-id');
                        $.post('BorrarComentarioPlataforma.php', {'idComentario':idComentario}, function(response)
                        {
                            mostrarComentarioPlataforma();
                        });
                        e.preventDefault();
                    })
                }
            })
        </script>
        <!--Scripts Font Awesome para los iconos.-->
        <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
        <!--Script para el footer.-->
		<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
	</body>
</html>