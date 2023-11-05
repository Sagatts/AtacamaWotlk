<?php
if (isset($_GET["dia_"], $_GET["mes_"], $_GET["ano_"], $_GET["user_"], $_GET["contrasena_"], $_GET["confirmar_contra_"], $_GET["name_"], $_GET["apellido_"], $_GET["Correo"], $_GET["terminos_"], $_GET["mejoras_"])) {

    include('conexion.php');
    $con = conectar();

    $mostrar=$_GET["mejoras_"];
    echo $mostrar;

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

    if ($_GET["terminos_"] == true) {
        $Terminos_ = "Si";
    } else {
        $Terminos_ = "No";
    }

    if ($_GET["mejoras_"] == "No") {
        $Actualizaciones_ = "No";
    } else {
        $Actualizaciones_ = "Si";
    }

    $sql = "INSERT INTO cuentas (Usuario, Contrasena, Confirmacion_contra, Nombre, Apellido, Fecha_nac, Correo, Terminos, Actualizaciones) VALUES ('$Usuario_', '$Contrasena_', '$Confirmacion_', '$Nombre_', '$Apellido_', '$Fecha_nac', '$Correo_', '$Terminos_', '$Actualizaciones_')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Registro exitoso. Serás redirigido a la página de inicio de sesión.";
        header("refresh:2;url=Inicio_sesion.php");
        exit;
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }
}
?>
