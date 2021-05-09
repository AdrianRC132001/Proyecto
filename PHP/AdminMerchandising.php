<?php
    require "BD/DAOMerchandising.php";
    session_start();
?>
<body>
    <div class="container contenedor">
        <div class="row margen">
            <div class="col-md-4">
                <a href="InsertarMerchandising.php" class="btn btn-warning"><i class="fas fa-plus"></i>&nbsp;Nuevo producto</a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="BuscarMerchandising.php" method="GET" class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" name="busquedaMerchandising" id="busquedaMerchandising" placeholder="Buscar..." aria-label="Search">
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
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Herramientas</th>
                    </tr>
                </thead>
                <?php
                    //Creamos la conexión a la BD.
                    $conexion = conectar(true);
                    $result = mostrarMerchandising($conexion);
                    while($mostrar = mysqli_fetch_array($result))
                    {
                ?>
                        <tbody class="bg-dark text-center text-danger">
                            <tr>
                                <td><?php echo $mostrar['idMerchandising']?></td>
                                <td><?php echo $mostrar['Nombre']?></td>
                                <td>
                                    <div class="fotoPerfil">
                                        <figure>
                                            <a href="ImagenMerchandising.php?idMerchandising=<?php echo $mostrar['idMerchandising'];?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($mostrar['Imagen']);?>" class="img-responsive" width="60vh" height="60vh" alt="Producto"></a>
                                            <div class="capa">
                                                <a class="link" href="ImagenMerchandising.php?idMerchandising=<?php echo $mostrar['idMerchandising'];?>"><p class="capa"><i class="fas fa-pen"></i>&nbsp;Editar</p></a>
                                            </div>
                                        </figure>
                                    </div>
                                </td>
                                <td><?php echo $mostrar['Precio']?>€</td>
                                <td><?php echo $mostrar['Stock']?> unidades</td>
                                <td><?php echo $mostrar['Descripción']?></td>
                                <td class="botonesUsuarios">
                                    <a class="btn btn-danger" href="BorrarMerchandising.php?idMerchandising=<?php echo $mostrar['idMerchandising'];?>" value="Eliminar" name="borrarMerchandising"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</a>
                                    <a class="btn btn-success" href="ModificarMerchandising.php?idMerchandising=<?php echo $mostrar['idMerchandising'];?>" value="Modificar" name="modificarMerchandising"><i class="fas fa-edit"></i>&nbsp;Modificar</a>
                                    <a class="btn btn-primary" href="DetallesMerchandising.php?idMerchandising=<?php echo $mostrar['idMerchandising'];?>" value="Info" name="infoMerchandising"><i class="fas fa-info-circle"></i></a>
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