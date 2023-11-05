<?php
    include('conexion.php');
    $con=conectar();

    $M_Usuario_=$_GET['M_user_'];

    $M_dia_=$_GET['M_dia_'];
    $M_mes_=$_GET['M_mes_'];
    $M_ano_=$_GET['M_ano_'];

    $M_Fecha_nac_= $M_dia_ . "-" . $M_mes_ . "-" . $M_ano_;
    
    $M_nombre_=$_GET['M_name_'];
    $M_apellido_=$_GET['M_apellido_'];
    $M_correo_=$_GET['M_correo_'];
    $M_contrasena_=$_GET['M_contrasena_'];
    $M_confirmacion_contra_=$_GET['M_confirmar_contra_'];

    $M_terminos_=$_GET['M_terminos_'];
    $M_actualizaciones_=$_GET['M_mejoras_'];

    $sql="UPDATE cuentas SET Nombre='$M_nombre_', Apellido='$M_apellido_', Correo='$M_correo_', Contrasena='$M_contrasena_', Confirmacion_contra='$M_confirmacion_contra_', Fecha_nac='$M_Fecha_nac_', Terminos='$M_terminos_', Actualizaciones='$M_actualizaciones_'  WHERE Usuario='$M_Usuario_'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        $mensaje = "Se actualizaron los siguientes datos: Nombre: $M_nombre_, Apellido: $M_apellido_, Correo: $M_correo_, Fecha de nacimiento: $M_Fecha_nac_, Términos y condiciones: $M_terminos_, Actualizaciones: $M_actualizaciones_";
        echo "<script>alert('$mensaje'); window.location = 'foro.php';</script>";
    }
?>