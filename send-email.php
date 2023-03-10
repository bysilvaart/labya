<?php
// Variables para los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Destinatario del correo electrónico
$to = '1705.jlss@gmail.com';

// Asunto del correo electrónico
$subject = 'Mensaje del formulario de contacto';

// Cuerpo del correo electrónico
$body = "Nombre: $name\n\nCorreo electrónico: $email\n\nMensaje:\n$message";

// Encabezados del correo electrónico
$headers = "From: $email\r\nReply-To: $email\r\n";

// Envío del correo electrónico
if (mail($to, $subject, $body, $headers)) {
  http_response_code(200);
  echo 'El mensaje ha sido enviado.';
} else {
  http_response_code(500);
  echo 'Ha ocurrido un error al enviar el mensaje.';
}
?>
