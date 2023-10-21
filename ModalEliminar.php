<div class="modal fade" id="EliminarCuentas<?php echo $row['Usuario']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Estas Seguro de eliminar a: <?php echo $row['Usuario']; ?>?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <a class="btn btn-danger" data-dismiss="modal" href="eliminar.php?id=<?php echo $row['Usuario']?>">Eliminar</a>
        </div>
        </div>
    </div>
</div>