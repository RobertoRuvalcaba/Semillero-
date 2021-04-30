<?php

    //llamando a los campos 
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $seleccion = $_POST['seleccion'];
    $mensaje = $_POST['mensaje'];

    // datos del correo 
    $destinatario = "correo@gmail.com";
    $asunto = "contacto de $nombre";

    $carta = "DE: $nombre \n ";
    $cara .= "Correo: $correo \n";
    $carta .= "Seleccion: $seleccion \n";
    $carta .= "Mensaje: $mensaje \n";
    // envio de mensaje 
    mail($destinatario,$asunto,$carta); 
    header('location:index.html'); 
?>
