<?php
require_once('connection.php');
$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];



$sql = "INSERT INTO `Usuario` (`Nombre`,`Usuario`,`Contraseña`) VALUES ( '".$_POST['nombre']."' , '".$_POST['usuario']."' , '".$_POST['contraseña']."')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: inicioSesion.php");
}
else
{
	echo "Error :".$sql;
}
mysqli_close($conn);
?>


