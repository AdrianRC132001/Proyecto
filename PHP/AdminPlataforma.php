<?php
    require "BD/DAOPlataforma.php";
    session_start();
?>
<body>
    <div class="container contenedor">
        <div class="row margen">
            <div class="col-md-4">
                <a href="InsertarPlataforma.php" class="btn btn-warning"><i class="fas fa-plus"></i>&nbsp;Nueva plataforma</a>
            </div>
            <div class="col-md-4"></div>
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
                    //Creamos la conexión a la BD.
                    $conexion = conectar(true);
                    $result = mostrarPlataforma($conexion);
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
</body>