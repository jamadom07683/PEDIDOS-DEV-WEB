<?php
include('config.php');

    if (isset($_POST['Nombre']) && isset($_POST['Usuario']) && isset($_POST['Contraseña']){
        $sentenciaSQL = "INSERT INTO `Usuario` ( `Nombre`, `Usuario`, `Contraseña`) ";
        $sentenciaSQL = $sentenciaSQL."VALUES ( '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Nombre']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Usuario']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Contraseña']."', '";
        if ($conexion->query($sentenciaSQL) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sentenciaSQL . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>
