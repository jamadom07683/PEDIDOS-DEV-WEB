<?php
require_once('connection.php');
//$Nombre = $Usuario = $Contraseña '';

$Nombre = $_POST['Nombre'];
$Usuario = $_POST['Usuario'];
$Contrasena = $_POST['Contraseña'];


$sql = "INSERT INTO Usuario (Nombre,Usuario,Contraseña) VALUES ('$Nombre','$Usuario','$Contrasena')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: inicioSesion.php");
}
else
{
	echo "Error :".$sql;
}
?>
