<?php
    include('conexion.php');
    $con=conectar();
    
    $Dia_ = $_GET["dia_"];
    $Mes_ = $_GET["mes_"];
    $year_ = $_GET["ano_"];

    $Usuario_ = $_GET["user_"];
    $Contrasena_ = $_GET["contrasena_"];
    $Confirmacion_ = $_GET["confirmar_contra_"];
    $Nombre_ = $_GET["name_"];
    $Apellido_ = $_GET["apellido_"];
    $Fecha_nac = $Dia_ . "-" . $Mes_ . "-" . $year_;
    $Correo_ = $_GET["Correo"];

    if($_GET["terminos_"]==true){
        $Terminos_ = "Si";
    }
    else{
        $Terminos_ = "No";
    }

    if($_GET["mejoras_"]==true){
        $Actualizaciones_= "Si";
    }
    else{
        $Actualizaciones_ = "No";
    }

    $sql="INSERT INTO cuentas (Usuario, Contrasena, Confirmacion_contra, Nombre, Apellido, Fecha_nac, Correo, Terminos, Actualizaciones) VALUES ('$Usuario_', '$Contrasena_', '$Confirmacion_', '$Nombre_', '$Apellido_', '$Fecha_nac', '$Correo_', '$Terminos_', '$Actualizaciones_')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: registro.php");
    }
?>