<?php
    require "BD/ConectorBD.php";
    require "BD/DAOItem.php";
    require "BD/DAOPlataforma.php";
    require "BD/DAOVideojuego.php";
    require "BD/DAOMerchandising.php";
    require "BD/DAOUsuario.php";
    session_start();
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
                    <h1 class="titulo"><i>Mi carrito</i></h1>
                </div>
                <div class="col-md-8">
                    <div class="table-responsive">
                        <div class="container contenedor">
                            <div class="row margen">
                                <table class="table bg-dark rounded">
                                    <thead class="bg-danger text-center">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;Cantidad&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Herramientas</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        //Creamos la conexión a la BD.
                                        $conexion = conectar(true);
                                        $buscarProductoCarrito = verCarrito($conexion, $idCesta);
                                        while($productoCarrito = mysqli_fetch_assoc($buscarProductoCarrito))
                                        {
                                    ?>
                                            <tbody class="bg-dark text-center text-danger">
                                                <tr>
                                                    <td><?php echo $productoCarrito['NombreProducto']?></td>
                                                    <td><a class="btn btn-danger" href="RestarCantidad.php?idProductoCarrito=<?php echo $productoCarrito['idItem'];?>"><i class="fas fa-minus"></i></a>&nbsp;<?php echo $productoCarrito['Cantidad']; ?>&nbsp;<a class="btn btn-success" href="SumarCantidad.php?idProductoCarrito=<?php echo $productoCarrito['idItem'];?>"><i class="fas fa-plus"></i></a></td>
                                                    <td><?php echo $productoCarrito['StockProducto']?></td>
                                                    <td><?php echo $productoCarrito['PrecioProducto']?>€</td>
                                                    <td><a class="btn btn-danger" href="BorrarProductoCarrito.php?idProductoCarrito=<?php echo $productoCarrito['idItem'];?>" value="Eliminar" name="borrarProductoCarrito"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</a></td>
                                                </tr>
                                            </tbody>
                                    <?php
                                        }
                                    ?>
                                    <tr class="text-center bg-primary">
                                        <td><a class="btn btn-success col-md-12" href="#"><i class="fas fa-cart-arrow-down"></i>&nbsp;Comprar</a></td>
                                        <td style="font-size:1.1rem;"><b>Precio total</b></td>
                                        <td style="font-size:1.1rem;"><b>--></b></td>
                                        <?php
                                            $consulta = mysqli_fetch_assoc(precioTotal($conexion, $idCesta));
                                            if($consulta['sum(PrecioProducto * Cantidad)'] == NULL)
                                            {
                                                echo '<td style="font-size:1.1rem;">0.00€</td>';
                                            }
                                            else
                                            {
                                                echo '<td style="font-size:1.1rem;">' . $consulta['sum(PrecioProducto * Cantidad)'] . '€</td>';
                                            }
                                        ?>
                                        <td><a class="btn btn-warning col-md-12" href="BorrarCarrito.php"><i class="fas fa-trash-alt"></i>&nbsp;Vaciar carrito</a></td>
                                    </tr>
                                </table>
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