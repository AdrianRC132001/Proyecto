<?php
    require "BD/DAOUsuario.php";
    session_start();
?>
<body>
    <div class="container contenedor">
        <div class="row margen">
            <div class="col-md-4">
                <a href="InsertarUsuario.php" class="btn btn-warning"><i class="fas fa-user-plus"></i>&nbsp;Nuevo usuario</a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="BuscarUsuario.php" method="GET" class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" name="busquedaUsuario" id="busquedaUsuario" placeholder="Buscar..." aria-label="Search">
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
                        <th scope="col">Nick</th>
                        <th scope="col">Password</th>
                        <th scope="col">Foto de perfil</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Primer apellido</th>
                        <th scope="col">2º apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">eMail</th>
                        <th scope="col">Código Postal</th>
                        <th scope="col">Comunidad Autónoma</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Herramientas</th>
                    </tr>
                </thead>
                <?php
                    //Creamos la conexión a la BD.
                    $conexion = conectar(true);
                    $result = mostrarUsuario($conexion);
                    while($mostrar = mysqli_fetch_array($result))
                    {
                ?>
                        <tbody class="bg-dark text-center text-danger">
                            <tr>
                                <td><?php echo $mostrar['idUsuario']?></td>
                                <td><?php echo $mostrar['Nick']?></td>
                                <td><?php echo $mostrar['Password']?></td>
                                <td>
                                    <div class="fotoPerfil">
                                        <figure>
                                            <a href="VentanaEmergenteFotoAdmin.php?idUsuario=<?php echo $mostrar['idUsuario'];?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Foto']);?>" class="img-responsive" width="60vh" height="60vh" alt="Foto de perfil"></a>
                                            <div class="capa">
                                                <a class="link" href="VentanaEmergenteFotoAdmin.php?idUsuario=<?php echo $mostrar['idUsuario'];?>"><p class="capa"><i class="fas fa-pen"></i>&nbsp;Editar</p></a>
                                            </div>
                                        </figure>
                                    </div>
                                </td>
                                <td><?php echo $mostrar['Nombre']?></td>
                                <td><?php echo $mostrar['Apellido1']?></td>
                                <td><?php echo $mostrar['Apellido2']?></td>
                                <td><?php echo $mostrar['DNI']?></td>
                                <td><?php echo $mostrar['FechaDeNacimiento']?></td>
                                <td><?php echo $mostrar['Teléfono']?></td>
                                <td><?php echo $mostrar['eMail']?></td>
                                <td><?php echo $mostrar['CP']?></td>
                                <td><?php echo $mostrar['CA']?></td>
                                <td><?php echo $mostrar['Provincia']?></td>
                                <td><?php echo $mostrar['Dirección']?></td>
                                <td><?php echo $mostrar['Descripción']?></td>
                                <td><?php echo $mostrar['Rol']?></td>
                                <td class="botonesUsuarios">
                                    <a class="btn btn-danger" href="BorrarUsuario.php?idUsuario=<?php echo $mostrar['idUsuario'];?>" value="Eliminar" name="borrarUsuario"><i class="fas fa-user-times"></i>&nbsp;Eliminar</a>
                                    <a class="btn btn-success" href="ModificarUsuario.php?idUsuario=<?php echo $mostrar['idUsuario'];?>" value="Cambiar rol" name="modificarUsuario"><i class="fas fa-user-tag"></i>&nbsp;Cambiar rol</a>
                                    <a class="btn btn-primary" href="ModificarUsuarioAdmin.php?idUsuario=<?php echo $mostrar['idUsuario'];?>" value="Modificar" name="modificarUsuarioAdmin"><i class="fas fa-user-edit"></i>&nbsp;Modificar</a>
                                </td>
                            </tr>
                        </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>