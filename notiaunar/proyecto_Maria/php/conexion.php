<?php 
    $host = "localhost";
    $user = "root";
    $db = "proyecto";
    $pw = "26930470";
    $con = new mysqli($host,$user,$pw, $db);
    if($con){
        echo "Conexión realizada exitosamente.";
    }else{
        echo "no se pudo conectar. ". mysqli_error();
    }
?>