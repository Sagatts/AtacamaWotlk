<?php
    include('conexion.php');
    $con=conectar();

    $M_Usuario_=$_GET['M_user_'];
    
    $M_nombre_=$_GET['M_name_'];
    $M_apellido_=$_GET['M_apellido_'];
    $M_correo_=$_GET['M_correo_'];
    $M_contrasena_=$_GET['M_contrasena_'];
    $M_confirmacion_contra_=$_GET['M_confirmar_contra_'];

    $sql="UPDATE cuentas SET Nombre='$M_nombre_', Apellido='$M_apellido_', Correo='$M_correo_', Contrasena='$M_contrasena_', Confirmacion_contra='$M_confirmacion_contra_'  WHERE Usuario='$M_Usuario_'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: foro.php");
    }
?>