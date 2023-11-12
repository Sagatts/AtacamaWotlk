<?php
    include('conexion.php');
    $con = conectar();

    // Obtener datos del formulario
    $nuevaContrasena = $_GET['nueva_contrasena'];
    $confirmarContrasena = $_GET['confirmar_contrasena'];
    $recuUsuario = $_GET['recu_usuario'];


    // Actualizar la contraseña en la base de datos
    $sql = "UPDATE cuentas SET Contrasena = '$nuevaContrasena', Confirmacion_contra='$confirmarContrasena'  WHERE Usuario = '$recuUsuario'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script>alert('Contraseña restablecida con éxito.');</script>";
        header("refresh:0;url=Inicio_sesion.php");
    } else {
        echo "<script>alert('Error al restablecer la contraseña.');</script>";
        header("refresh:0;url=restablecer_pass.php");
    }
?>