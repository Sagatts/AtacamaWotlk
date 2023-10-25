<div class="modal fade" id="Actualizar_Usuario<?php echo $row['Usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php
        list($M_dia, $M_mes, $M_year) = explode("-", $row['Fecha_nac']);

        if($row['Terminos']=="Si"){
            $verdadero=true;
        }
    ?>
    <div class="modal-dialog modal-fullscreen-sm-down">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Datos de: <?php echo $row['Usuario']; ?> </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form form action="actualizar_.php" method="POST" class="row g-3" novalidate>
                    <input type="hidden" class="form-control" name="M_user_" id="M_user" value="<?php echo $row['Usuario']?>">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="M_nombre">Nombre:</label>
                                <input type="text" class="form-control" name="M_name_" id="M_nombre" value="<?php echo $row['Nombre']?>" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese el nombre.
                                </div>
                            </div>
                            <div class="col">
                                <label for="M_apellido">Apellido:</label>
                                <input type="text" class="form-control" name="M_apellido_" id="M_apellido" value="<?php echo $row['Apellido']?>" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese el apellido.
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="M_correo">Correo Electronico:</label>
                                <input type="email" class="form-control" id="M_correo" name="M_correo_" value="<?php echo $row['Correo']?>" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese el correo.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>Fecha de nacimiento:</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="text" class="form-control" id="M_dia" name="M_dia_" placeholder="Dia" value="<?php echo $M_dia?>" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el dia.
                                    </div>
                                </div>
                                <div class="col-5">
                                    <select class="form-select" aria-label="Default select example" id="M_mes" name="M_mes_" required>
                                        <option disabled value="" style="color: black;">Seleccione el mes:</option>
                                        <option value="01" <?php if($M_mes === '01') { echo 'selected'; } ?> style="color: black;">Enero</option>
                                        <option value="02" <?php if($M_mes === '02') { echo 'selected'; } ?> style="color: black;">Febrero</option>
                                        <option value="03" <?php if($M_mes === '03') { echo 'selected'; } ?> style="color: black;">Marzo</option>
                                        <option value="04" <?php if($M_mes === '04') { echo 'selected'; } ?> style="color: black;">Abril</option>
                                        <option value="05" <?php if($M_mes === '05') { echo 'selected'; } ?> style="color: black;">Mayo</option>
                                        <option value="06" <?php if($M_mes === '06') { echo 'selected'; } ?> style="color: black;">Junio</option>
                                        <option value="07" <?php if($M_mes === '07') { echo 'selected'; } ?> style="color: black;">Julio</option>
                                        <option value="08" <?php if($M_mes === '08') { echo 'selected'; } ?> style="color: black;">Agosto</option>
                                        <option value="09" <?php if($M_mes === '09') { echo 'selected'; } ?> style="color: black;">Septiembre</option>
                                        <option value="10" <?php if($M_mes === '10') { echo 'selected'; } ?> style="color: black;">Octubre</option>
                                        <option value="11" <?php if($M_mes === '11') { echo 'selected'; } ?> style="color: black;">Noviembre</option>
                                        <option value="12" <?php if($M_mes === '12') { echo 'selected'; } ?> style="color: black;">Diciembre</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el mes.
                                    </div>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control" id="M_año" name="M_ano_" placeholder="Año" value="<?php echo $M_year?>" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el año.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <label>Contraseña:</label>
                                <input type="text" class="form-control" name="M_contrasena_" id="M_contraseña" value="<?php echo $row['Contrasena']?>" required>
                                <div class="invalid-feedback">
                                Por favor ingrese la contraseña.
                                </div>
                            </div>
                            <div class="col">
                                <label>Confirmar contraseña:</label>
                                <input type="text" class="form-control" id="M_contrasena_confir" name="M_confirmar_contra_" value="<?php echo $row['Confirmacion_contra']?>" required>
                                <div class="invalid-feedback">
                                Por favor confirme la contraseña.
                                </div>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 10px">
                            <label class="form-check-label" for="M_terminos">
                            Acepta los términos, condiciones y la Política de Privacidad
                            </label>
                            <select class="form-select" aria-label="Default select example" id="M_terminos" name="M_terminos_" required>
                                <option <?php if($row['Terminos'] === 'Si') { echo 'selected'; } ?> style="color: black;">Si</option>
                                <option <?php if($row['Terminos'] === 'No') { echo 'selected'; } ?> style="color: black;">No</option>
                            </select>
                            <div class="invalid-feedback">
                            Debes aceptar antes de enviar.
                            </div>
                        </div>
                        <div class="col" style="margin-top: 10px">
                            <label class="form-check-label" for="imejoras">
                                Quiero recibir avisos de las actualizaciones (opcional).
                            </label>
                            <select class="form-select" aria-label="Default select example" id="imejoras" name="M_mejoras_">
                                <option <?php if($row['Actualizaciones'] === 'Si') { echo 'selected'; } ?> style="color: black;">Si</option>
                                <option <?php if($row['Actualizaciones'] === 'No') { echo 'selected'; } ?> style="color: black;">No</option>
                            </select>
                        </div>
                        <div class="text-end" style="margin-top: 10px;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Confirmar Cambios</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
