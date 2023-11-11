<?php
include("conexion.php");
$con = conectar();

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM cuentas WHERE nombre_usuario LIKE '%$search%' ORDER BY nombre_usuario";
    $query = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($query)) {
        echo '<tr class="table-light">
            <td>' . $row['Usuario'] . '</td>
            <td>' . $row['Nombre'] . '</td>
            <td>' . $row['Apellido'] . '</td>
            <td>' . $row['Fecha_nac'] . '</td>
            <td>' . $row['Correo'] . '</td>
            <td>' . $row['Terminos'] . '</td>
            <td>' . $row['Actualizaciones'] . '</td>
            <td>' . $row['Rol'] . '</td>
            <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Actualizar_Usuario' . $row['Usuario'] . '">Modificar</button></td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarCuentas' . $row['Usuario'] . '">Eliminar</button></td>
            </tr>';
    }
}
?>