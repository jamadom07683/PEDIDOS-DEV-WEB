<?php

require_once('connection.php');


$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];


$sql = "SELECT * FROM Usuario WHERE Usuario='".$Usuario."' AND Contrasena='".$Contrasena."'";
$result = mysqli_query($conn, $sql);
$datos = mysqli_fetch_array($result);

if(mysqli_num_rows($result) == 0){
	while($row = mysqli_fetch_assoc($result)){
		$id = $row["ID"];
		$Usuario = $row["user"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $Contrasena;
	}
    echo "Invalid usser or password";
}
else{
	echo "Bienvenido";
}

?>
