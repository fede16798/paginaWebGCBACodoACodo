<?php
// Calling the form fields
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Dates to the email
$destinatario = "fede.amico98@gmail.com";
$header = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje \n";
$carta .= "Enviado el " . date('d/m/Y', time());

// Sending message
if (mail($destinatario, $header, $carta))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='contacto.html';</script>";
?>?>