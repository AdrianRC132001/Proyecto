<?php
    error_reporting(0);
    $nick = $_SESSION['Nick'];
    $rol = $_SESSION['Rol'];
    if($_SESSION['Rol'] == "admin")
    {
        echo '
            <a class="enlaceDesactivado">' . $nick . ': ' . $rol . '</a>
            <a class="nav-link mr-sm-2" href="Carrito.php"><i class="fas fa-shopping-cart"></i> Mi carrito </a>
            <a class="nav-link mr-sm-2" href="Admin.php"><i class="fas fa-cog"></i> Administración </a>
            <a class="nav-link mr-sm-2" href="Perfil.php"><i class="fas fa-user-cog"></i> Perfil </a>
            <a class="nav-link mr-sm-2" href="DeslogearUsuario.php" data-toggle="modal" data-target="#emergenteLogOut"><i class="fas fa-sign-out-alt"></i> Cerrar sesión </a>
        ';
    }
    else if($_SESSION['Rol'] == "usuario")
    {
        echo '
            <a class="enlaceDesactivado">' . $nick . ': ' . $rol . '</a>
            <a class="nav-link mr-sm-2" href="Carrito.php"><i class="fas fa-shopping-cart"></i> Mi carrito </a>
            <a class="nav-link mr-sm-2" href="Perfil.php"><i class="fas fa-user-cog"></i> Perfil </a>
            <a class="nav-link mr-sm-2" href="DeslogearUsuario.php" data-toggle="modal" data-target="#emergenteLogOut"><i class="fas fa-sign-out-alt"></i> Cerrar sesión </a>
        ';
    }
    else
    {
        echo '
            <a class="nav-link mr-sm-2" href="Login.php"><i class="fas fa-sign-in-alt"></i> Iniciar sesión </a>
            <a class="nav-link mr-sm-2" href="Register.php"><i class="fas fa-user"></i> Registro </a>
        ';
    }
?>