<?php
require_once('connection.php');

/*$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];*/


$message = '';


if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['contraseña'])){

    //$sql = "INSERT INTO Usuario ( Nombre,Usuario,Contraseña ) VALUES (
    //'".$_POST['nombre']."',
    //'".$_POST['usuario']."',
    //'".$_POST['contraseña']."'
    //)";

    $sql = "INSERT INTO Usuario (Nombre,Usuario,Contraseña) VALUES (
    '".$_POST['nombre']."',
    '".$_POST['usuario']."',
    '".$_POST['contraseña']."'
    )";

    /*
    if ($conn -> query($sql) == true){

        echo '<br>See Insertó el usuario';

    }else{

        echo '<br>paila ese man no se deja';
    }
    */

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


    mysqli_close($conn);

}




/*
$message = '';

if(!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['contraseña'])){
    $sql ="INSERT INTO Usuario (Nombre,Usuario,Contraseña) VALUES (:nombre,:usuario,:contraseña)";
    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':nombre', $_POST['nombre']);

    $stmt ->bindParam(':usuario',$_POST['usuario']);

    $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña', $password);

     if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
}








*/

?>
