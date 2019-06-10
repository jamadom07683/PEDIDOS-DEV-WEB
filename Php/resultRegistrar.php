<?php
require_once('connection.php');

//$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];
$post="";

if ($Nombre=="" || $Usuario=="" || $Contrasena=""){
        echo 'alert("Datos incorrectos o incompletos")';
}
$sql= "INSERT INTO Usuario (Nombre,Usuario,Contraseña) VALUES ('".$Nombre."','".$Usuario."','".$Contrasena."')";

if (mysqli_query($conn, $sql) === TRUE) {
    echo 'alert("Registro completo")';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close( $conn );



?>
