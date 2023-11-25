<?php
session_start();
include('conexion.php');
$con = conectar();

$Recu_Usuario_=$_GET['recu_usuario'];

$verificarUsuario = "SELECT Usuario FROM cuentas WHERE Usuario = '$Recu_Usuario_'";
$resultado = mysqli_query($con, $verificarUsuario);

if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['recu_usuario'] = $Recu_Usuario_;
    echo "<script>alert('El nombre de usuario encontrado.');</script>";
    header("refresh:0;url=recuperacion_de_contra.php");
} else {
    echo "<script>alert('El nombre de usuario no existe.');</script>";
    header("refresh:0;url=recuperar_pass.php");
}
?>
