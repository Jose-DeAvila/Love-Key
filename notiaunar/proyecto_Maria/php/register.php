<?php 
    include "conexion.php";
    $identificacion = $_POST['identificacion'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $codigo = hash('ripemd160', $identificacion);
    $pass = password_hash($_POST['contrasenia'], PASSWORD_DEFAULT);
    $sql = "SELECT * FROM estudiantes where identificacion='$identificacion'";
    $eje = $con->query($sql);
    $reg = $eje->fetch_assoc();
    if($identificacion==$reg['identificacion']){
        header("Location: ../index.php?reg=1");
    }
    else if($identificacion!=$reg['identificacion']){
        $insert = "INSERT INTO estudiantes (codigo, identificacion, primerApellido, segundoApellido, direccion, telefono, email, contrasenia) VALUES ('$codigo',$identificacion,'$primerApellido', '$segundoApellido', '$direccion', $telefono, '$email', '$pass')";
        mysqli_query($con, $insert);
        header("Location: ../index.php?reg=2");
    }else{
        header("Location: ../index.php?reg=1");
    }
?>