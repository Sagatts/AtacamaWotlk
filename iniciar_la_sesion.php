<?php
    include("conexion.php");
    
    // Inicia la sesión
    session_start();

    $con = conectar();

    if (isset($_GET["btnIngresar_sesion"])) {
        $Usuario_login = $_GET["Usuario_sesion"];
        $Contrasena_login = $_GET["Contrasena_sesion"];

        $query = "SELECT * FROM cuentas WHERE Usuario = '$Usuario_login' AND Contrasena = '$Contrasena_login'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            // Inicio de sesión exitoso, establece la variable de sesión
            $usuarioData = mysqli_fetch_assoc($result);
            $_SESSION["usuario"] = $Usuario_login;
            $_SESSION["rol"] = $usuarioData["Rol"];

            echo "<script>alert('¡Inicio de sesión exitoso!');</script>";
            header("refresh:0;url=index.php");
            exit();
        } else {
            echo "<script>alert('¡Usuario o contraseña incorrectas!');</script>";
            header("refresh:0;url=Inicio_sesion.php");
        }
    }
?>
