<?php

require_once('connection.php');
$Usuario = $Contrasena  = '';

$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];
$sql = "SELECT * FROM Usuario WHERE Usuario='$Usuario' AND Contraseña='$Contrasena'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0)
{
	echo "Usuario o clave incorrecta";
}
else
{
	echo "Bienvenido";
}
?>
