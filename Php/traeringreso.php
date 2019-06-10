<?php

require_once('connection.php');
$Usuario = $Contrasena  = '';

$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];
$sql = "SELECT * FROM Usuario WHERE Usuario='$Usuario' AND Contraseña='$Contrasena'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$Usuario = $row["user"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $Contrasena;
	}
	echo "Bienvenido";
}
else
{
	echo "Invalid usser or password";
}
?>
