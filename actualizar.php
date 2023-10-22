<?php
    include("conexion.php");
    $con=conectar();
    
    $M_Dia_ = $_GET["M_dia_"];
    $M_Mes_ = $_GET["M_mes_"];
    $M_year_ = $_GET["M_ano_"];
    
    $M_Usuario_ = $_GET["M_usuario"];
    
    $M_Contrasena_ = $_GET["M_contrasena_"];
    $M_Confirmacion_ = $_GET["M_confirmar_contra_"];
    $M_Nombre_ = $_GET["M_name_"];
    $M_Apellido_ = $_GET["M_apellido_"];
    $M_Fecha_nac = $M_Dia_ . "-" . $M_Mes_ . "-" . $M_year_;
    $M_Correo_ = $_GET["M_Correo_"];
    
    $M_Terminos_ = isset($_GET["M_terminos_"]) ? "Si" : "No";
    $M_Actualizaciones_ = isset($_GET["M_mejoras_"]) ? "Si" : "No";

    $sql ="UPDATE `cuentas` SET `Contrasena` = '$M_Contrasena_', `Confirmacion_contra` = '$M_Confirmacion_', `Nombre` = '$M_Nombre_', `Apellido` = '$M_Apellido_', `Fecha_nac` = '$M_Fecha_nac', `Correo` = '$M_Correo_', `Terminos` = '$M_Terminos_', `Actualizaciones` = '$M_Actualizaciones_' WHERE `cuentas`.`Usuario` = '$M_Usuario_'";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: foro.php");
    }

?>