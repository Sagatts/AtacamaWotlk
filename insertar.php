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

    $Terminos_ = "No";
    $Actualizaciones_ = "No";

    if (isset($_GET['checkboxes'])) {
        $arreglocheck = $_GET['checkboxes'];
        $num = count($arreglocheck);

        if ($num >= 1) {
            $Terminos_ = "Si";
        }
        if ($num == 2) {
            $Actualizaciones_ = "Si";
        }
    }

    $sql="INSERT INTO cuentas (Usuario, Contrasena, Confirmacion_contra, Nombre, Apellido, Fecha_nac, Correo, Terminos, Actualizaciones) VALUES ('$Usuario_', '$Contrasena_', '$Confirmacion_', '$Nombre_', '$Apellido_', '$Fecha_nac', '$Correo_', '$Terminos_', '$Actualizaciones_')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script>alert('¡Registro exitoso! Inicie sesion en su cuenta');</script>";
        header("refresh:10;url=Inicio_sesion.php");
    }
?>