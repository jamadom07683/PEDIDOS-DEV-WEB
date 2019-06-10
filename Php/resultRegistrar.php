<?php
require_once('connection.php');

//$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];

$Password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

if (!empty( $_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['contraseña'])){
    $sql= "INSERT INTO Usuario (Nombre,Usuario,Contrasena) VALUES ('".$Nombre."','".$Usuario."','".$Password."')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo '<script language="javascript">alert("Registro completo");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
else{
    echo '<script language="javascript">alert("Datos incompletos");</script>';
}


mysqli_close( $conn );



?>
