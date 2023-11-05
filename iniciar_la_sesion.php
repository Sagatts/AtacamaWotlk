<?php
    include("conexion.php");

    $con = conectar();

    if (isset($_GET["btnIngresar_sesion"])) {
        $Usuario_login = $_GET["Usuario_sesion"];
        $Contrasena_login = $_GET["Contrasena_sesion"];

        $query = "SELECT * FROM cuentas WHERE Usuario = '$Usuario_login' AND Contrasena = '$Contrasena_login'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('¡Inicio de sesion exitoso!');</script>";
            header("refresh:0;url=index.php");
            exit();
        } else {
            echo "<script>alert('¡Usuario o contraseña incorrectas!');</script>";
            header("refresh:0;url=Inicio_sesion.php");
        }
    }
?>
