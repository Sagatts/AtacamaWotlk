<?php
    include('conexion.php');
    $con=conectar();
    
    $Dia = $_GET["dia_"];
    $Mes_ = $_GET["mes_"];
    $year_ = $_GET["ano_"];

    $Usuario_ = $_GET["user"];
    $Contraseña_ = $_GET["Contraseña_"];
    $Confirmacion_ = $_GET["Confirmar_contra_"];
    $Nombre_ = $_GET["name_"];
    $Apellido_ = $_GET["Apellido"];
    $Fecha_nac = $Dia_ . "-" . $Mes_ . "-" . $year_;
    $Correo_ = $_GET["Correo"];
    $Terminos_ = $_GET["Terminos"];
    $Actualizaciones_ = $_GET["Mejoras"];

    $sql="INSERT INTO cuentas (Usuario, Contraseña, Confirmacion_contra, Nombre, Apellido, Fecha_nac, Correo, Terminos, Actualizaciones) VALUES ('$Usuario_', '$Contraseña_', '$Confirmacion_', '$Nombre_', '$Apellido_', '$Fecha_nac', '$Correo_', '$Terminos_', '$Actualizaciones_')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: registro.php");
    }
?>