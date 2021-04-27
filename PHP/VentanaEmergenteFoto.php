<div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="foto" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="foto">Call of Duty Zombies Full Guide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="botonClose" aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="ModificarFoto.php" id="formularioFoto" method="post" enctype="multipart/form-data">      
                <!--Imagen.-->
                <div class="form-group col-md-12">
                    <label for="foto">Seleccione una foto de perfil:</label>
                    <br>
                    <input type="file" name="foto" id="foto" required>
                    <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'];?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-success" value="Aceptar">
                </div>
            </form>
        </div>
    </div>
</div>