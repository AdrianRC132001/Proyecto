<?php
    error_reporting(0);
    $nick = $_SESSION['Nick'];
    $rol = $_SESSION['Rol'];
    if($_SESSION['Rol'] == "admin")
    {
        echo '
            <br>
            <br>
            <a class="enlaceDesactivado"><div class="foto"><img src="data:image/jpeg;base64,' . base64_encode($_SESSION['Foto']) . '" class="img-responsive" width="120vh" height="120vh" alt="Foto de perfil"></div><br>' . $nick . ': ' . $rol . '</a>
            <br>
            <br>
            <a class="nav-link mr-sm-2" href="Carrito.php"><i class="fas fa-shopping-cart"></i> Mi carrito </a>
            <br>
            <a class="nav-link mr-sm-2" href="Admin.php"><i class="fas fa-cog"></i> Administración </a>
            <br>
            <a class="nav-link mr-sm-2" href="Perfil.php"><i class="fas fa-user-cog"></i> Perfil </a>
            <br>
            <a class="nav-link mr-sm-2" href="DeslogearUsuario.php" data-toggle="modal" data-target="#emergenteLogOut"><i class="fas fa-sign-out-alt"></i> Cerrar sesión </a>
            <br>
        ';
    }
    else if($_SESSION['Rol'] == "usuario")
    {
        echo '
            <br>
            <br>
            <a class="enlaceDesactivado"><div class="foto"><img src="data:image/jpeg;base64,' . base64_encode($_SESSION['Foto']) . '" class="img-responsive" width="120vh" height="120vh" alt="Foto de perfil"></div><br>' . $nick . ': ' . $rol . '</a>
            <br>
            <br>
            <a class="nav-link mr-sm-2" href="Carrito.php"><i class="fas fa-shopping-cart"></i> Mi carrito </a>
            <br>
            <a class="nav-link mr-sm-2" href="Perfil.php"><i class="fas fa-user-cog"></i> Perfil </a>
            <br>
            <a class="nav-link mr-sm-2" href="DeslogearUsuario.php" data-toggle="modal" data-target="#emergenteLogOut"><i class="fas fa-sign-out-alt"></i> Cerrar sesión </a>
            <br>
        ';
    }
    else
    {
        echo '
            <br>
            <a class="nav-link mr-sm-2" href="Login.php"><i class="fas fa-sign-in-alt"></i> Iniciar sesión </a>
            <br>
            <a class="nav-link mr-sm-2" href="Register.php"><i class="fas fa-user"></i> Registro </a>
            <br>
        ';
    }
?>