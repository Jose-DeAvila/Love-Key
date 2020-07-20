<?php 
    include "conexion.php";
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM estudiantes where email='$email'";
    $res = $con->query($query);
    while($reg=$res->fetch_assoc()){
        if(password_verify($pass, $reg['contrasenia'])){
            session_start();
            $_SESSION['session'] = $reg['primerApellido']." ".$reg['segundoApellido'];
            header("Location: ../inicio.php");
        }
    }
    header("Location: ../index.php?init=1")
?>