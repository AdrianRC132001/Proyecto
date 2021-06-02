<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
    require "BD/DAOPlataforma.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(true);
    session_start();
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
                    <h1 class="titulo"><i>Panel de administración</i></h1>
                </div>
                <div class="col-md-8 tab">
                    <button class="tablinks active" onclick="panel(event, 'plataformas')">Plataformas</button>
                    <button class="tablinks" onclick="panel(event, 'videojuegos')">Videojuegos</button>
                    <button class="tablinks" onclick="panel(event, 'mapas')">Mapas</button>
                    <button class="tablinks" onclick="panel(event, 'productos')">Productos</button>
                    <button class="tablinks" onclick="panel(event, 'merchandising')">Merchandising</button>
                    <button class="tablinks" onclick="panel(event, 'usuarios')">Usuarios</button>
                </div>
                <div class="col-md-8">
                    <div id="plataformas" class="container-fluid">
                        <div class="table-responsive">
                            <div class="container contenedor">
                                <div class="row margen">
                                    <div class="col-md-4 mb-2">
                                        <a href="InsertarPlataforma.php" class="btn btn-warning"><i class="fas fa-plus"></i>&nbsp;Nueva plataforma</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="MostrarPlataformas.php" class="btn btn-warning"><i class="fas fa-table"></i>&nbsp;Mostrar todo</a>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="BuscarPlataforma.php" method="GET" class="form-inline my-2 my-lg-0">
                                            <div class="input-group">
                                                <input class="form-control" type="search" name="busquedaPlataforma" id="busquedaPlataforma" placeholder="Buscar..." aria-label="Search">
                                                <div class="input-group-append">
                                                    <button class="btn text-light bg-warning" type="submit"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <table class="table bg-dark rounded">
                                        <thead class="bg-danger text-center">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Imagen</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Lanzamiento</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Compañía</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Herramientas</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $variableBusqueda = $_GET['busquedaPlataforma'];
                                            $result = campoBuscarPlataforma($conexion, $variableBusqueda);
                                            while($mostrar = mysqli_fetch_array($result))
                                            {
                                        ?>
                                                <tbody class="bg-dark text-center text-danger">
                                                    <tr>
                                                        <td><?php echo $mostrar['idPlataforma']?></td>
                                                        <td><?php echo $mostrar['Nombre']?></td>
                                                        <td>
                                                            <div class="fotoPerfil">
                                                                <figure>
                                                                    <a href="ImagenPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Imagen']);?>" class="img-responsive" width="60vh" height="60vh" alt="Plataforma"></a>
                                                                    <div class="capa">
                                                                        <a class="link" href="ImagenPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>"><p class="capa"><i class="fas fa-pen"></i>&nbsp;Editar</p></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="fotoPerfil">
                                                                <figure>
                                                                    <a href="LogoPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Logo']);?>" class="img-responsive" width="60vh" height="60vh" alt="Logo"></a>
                                                                    <div class="capa">
                                                                        <a class="link" href="LogoPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>"><p class="capa"><i class="fas fa-pen"></i>&nbsp;Editar</p></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $mostrar['Lanzamiento']?></td>
                                                        <td><?php echo $mostrar['Precio']?>€</td>
                                                        <td><?php echo $mostrar['Stock']?> unidades</td>
                                                        <td><?php echo $mostrar['Compañía']?></td>
                                                        <td><?php echo $mostrar['Descripción']?></td>
                                                        <td class="botonesUsuarios">
                                                            <a class="btn btn-danger" href="BorrarPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>" value="Eliminar" name="borrarPlataforma"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</a>
                                                            <a class="btn btn-success" href="ModificarPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>" value="Modificar" name="modificarPlataforma"><i class="fas fa-edit"></i>&nbsp;Modificar</a>
                                                            <a class="btn btn-primary" href="DetallesPlataforma.php?idPlataforma=<?php echo $mostrar['idPlataforma'];?>" value="Info" name="infoPlataforma"><i class="fas fa-info-circle"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="videojuegos" class="container-fluid" style="display: none;">
                        <div class="table-responsive">
                            <?php include 'AdminVideojuego.php';?>
                        </div>
                    </div>
                    <div id="mapas" class="container-fluid" style="display: none;">
                        <div class="table-responsive">
                            <?php include 'AdminMapa.php';?>
                        </div>
                    </div>
                    <div id="productos" class="container-fluid" style="display: none;">
                        <div class="table-responsive">
                            <?php include 'AdminProducto.php';?>
                        </div>
                    </div>
                    <div id="merchandising" class="container-fluid" style="display: none;">
                        <div class="table-responsive">
                            <?php include 'AdminMerchandising.php';?>
                        </div>
                    </div>
                    <div id="usuarios" class="container-fluid" style="display: none;">
                        <div class="table-responsive">
                            <?php include 'AdminUsuario.php';?>
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
        <script src="../JavaScript/Panel.js"></script>
	</body>
</html>