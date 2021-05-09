<?php
    require "BD/DAOMapa.php";
    session_start();
?>
<body>
    <div class="container contenedor">
        <div class="row margen">
            <div class="col-md-4">
                <a href="InsertarMapa.php" class="btn btn-warning"><i class="fas fa-user-plus"></i>&nbsp;Nuevo mapa</a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="BuscarMapa.php" method="GET" class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" name="busquedaMapa" id="busquedaMapa" placeholder="Buscar..." aria-label="Search">
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
                        <th scope="col">DLC</th>
                        <th scope="col">Publicación</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Compañía</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Herramientas</th>
                    </tr>
                </thead>
                <?php
                    //Creamos la conexión a la BD.
                    $conexion = conectar(true);
                    $result = mostrarMapa($conexion);
                    while($mostrar = mysqli_fetch_array($result))
                    {
                ?>
                        <tbody class="bg-dark text-center text-danger">
                            <tr>
                                <td><?php echo $mostrar['idMapa']?></td>
                                <td><?php echo $mostrar['Nombre']?></td>
                                <td>
                                    <div class="fotoPerfil">
                                        <figure>
                                            <a href="ImagenMapa.php?idMapa=<?php echo $mostrar['idMapa'];?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Imagen']);?>" class="img-responsive" width="60vh" height="60vh" alt="Mapa"></a>
                                            <div class="capa">
                                                <a class="link" href="ImagenMapa.php?idMapa=<?php echo $mostrar['idMapa'];?>"><p class="capa"><i class="fas fa-pen"></i>&nbsp;Editar</p></a>
                                            </div>
                                        </figure>
                                    </div>
                                </td>
                                <td><?php echo $mostrar['DLC']?></td>
                                <td><?php echo $mostrar['Publicación']?></td>
                                <td><?php echo $mostrar['Precio']?>€</td>
                                <td><?php echo $mostrar['Stock']?> copias</td>
                                <td><?php echo $mostrar['Compañía']?></td>
                                <td><?php echo $mostrar['Descripción']?></td>
                                <td class="botonesUsuarios">
                                    <a class="btn btn-danger" href="BorrarMapa.php?idMapa=<?php echo $mostrar['idMapa'];?>" value="Eliminar" name="borrarMapa"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</a>
                                    <a class="btn btn-success" href="ModificarMapa.php?idMapa=<?php echo $mostrar['idMapa'];?>" value="Modificar" name="modificarMapa"><i class="fas fa-edit"></i>&nbsp;Modificar</a>
                                    <a class="btn btn-primary" href="DetallesMapa.php?idMapa=<?php echo $mostrar['idMapa'];?>" value="Info" name="infoMapa"><i class="fas fa-info-circle"></i></a>
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