<?php 
    $destino = 'joseluisdeavila01@gmail.com';
    $nombreCompleto = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['msg'];
    $contenido = "Nombre: ". $nombreCompleto . "\nCorreo: ". $email . "\nAsunto: ". $asunto . "\nMensaje: ". $mensaje;
    mail($destino,$asunto,$contenido);
    if(mail){
        header("Location: index.php?id=1#contacto");
    }
?>