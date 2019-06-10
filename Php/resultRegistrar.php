<?php
require_once('connection.php');

//$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];


if (!empty( $_POST['nombre']) || !empty($_POST['usuario']) || !empty($_POST['contraseña']){
        echo '<script language="javascript">alert("Datos incompletos");</script>';
}

$sql= "INSERT INTO Usuario (Nombre,Usuario,Contrasena) VALUES ('".$Nombre."','".$Usuario."','".$Contrasena."')";

if (mysqli_query($conn, $sql) === TRUE) {
    echo '<script language="javascript">alert("Registro completo");</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close( $conn );



?>
