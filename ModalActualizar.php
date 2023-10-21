<div class="modal fade" id="Actualizar_Usuario<?php echo $row['Usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Datos de: <?php echo $row['Usuario']; ?> </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form form action="actualizar.php" method="GET" class="row g-3" novalidate>
                        <div class="col-12">
                            <label for="inombre">Nombre:</label>
                            <input type="text" class="form-control" name="name_" id="inombre" required>
                            <div class="invalid-feedback">
                                Por favor ingrese el nombre.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="iapellido">Apellido:</label>
                            <input type="text" class="form-control" name="apellido_" id="iapellido" required>
                            <div class="invalid-feedback">
                                Por favor ingrese el apellido.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>