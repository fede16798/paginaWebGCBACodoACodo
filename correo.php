<?php
    $destinatario = 'fede.amico98@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina de proyecto Codo a Codo";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('correo enviado exitosamente');</script>";
    echo "<script> setTimeout(\"location.href='contacto.html'\" , 1000);</script>";
?>