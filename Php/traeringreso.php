<?php

    $Usuario = $_POST['Usuario'];
    $Contraseña= $_POST['Contraseña'];

    $Usuario = stripcslashes($Usuario);
    $Contraseña = stripcslashes($Contraseña);

    $Usuario=mysqli_real_escape_string($Uusario);
    $Contraseña = mysqli_real_escape_string($Contraseña);

    //conexión
    $host = 'localhost';
    $user = 'server';
    $password = 'server';
    $db = 'Proyecto';
    $conexion = new mysqli($host, $user, $password, $db);

    //resultado
    $result= $mysqli->query("select*from Usuario where Usuario='$Usuario' and Contraseña = '$Contraseña'")
        or die("Failed to query database".mysqli_error());
    $row=mysqli_fetch_array($result);
    if($row['Usuario']==$Usuario && $row['Contraseña']==$Contraseña){
        echo "Login successful!!! Welcome".$row['Usuario'];
    }else{
        echo "Failed to login";
    }

?>
