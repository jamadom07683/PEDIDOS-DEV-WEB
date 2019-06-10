<?php
require_once('connection.php');
$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];


$sql = "INSERT INTO Usuario VALUES ('$Nombre','$Usuario','$Contrasena')";
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
