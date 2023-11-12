<?php
    include("conexion.php");
    $con=conectar();

    $Nombre_Usuario=$_GET['id'];

    $sql="DELETE FROM cuentas WHERE Usuario='$Nombre_Usuario'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: gestion.php");
        }
?>