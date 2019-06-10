<?php
require_once('connection.php');
$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];


if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['contraseña'])){
        $sentenciaSQL = "INSERT INTO `Usuario` ( `Nombre`, `Usuario`, `Contraseña`) ";
        $sentenciaSQL = $sentenciaSQL."VALUES ( '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['nombre']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['usuario']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['contraseña']."', '";
        if ($conn->query($sentenciaSQL) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sentenciaSQL . "<br>" . $conn->error;
        }
        $conn->close();
}
?>
