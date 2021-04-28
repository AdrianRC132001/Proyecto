<?php
    session_start();
?>
<body>
    <div>
        <br>
        <center><a class="link" href="InsertarUsuario.php">Nuevo usuario</a></center>
        <br>
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
                <th scope="col">Teléfono</th>
                <th scope="col">eMail</th>
                <th scope="col">Código Postal</th>
                <th scope="col">Comunidad Autónoma</th>
                <th scope="col">Provincia</th>
                <th scope="col">DNI</th>
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
                        <td><?php echo $mostrar['Usuario']?></td>
                        <td><?php echo $mostrar['Password']?></td>
                        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Foto']);?>" class="img-responsive" width="60vh" height="60vh" alt="Foto de perfil"></td>
                        <td><?php echo $mostrar['Nombre']?></td>
                        <td><?php echo $mostrar['Apellido1']?></td>
                        <td><?php echo $mostrar['Apellido2']?></td>
                        <td><?php echo $mostrar['Teléfono']?></td>
                        <td><?php echo $mostrar['eMail']?></td>
                        <td><?php echo $mostrar['CP']?></td>
                        <td><?php echo $mostrar['CA']?></td>
                        <td><?php echo $mostrar['Provincia']?></td>
                        <td><?php echo $mostrar['DNI']?></td>
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
</body>