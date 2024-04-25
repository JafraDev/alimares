<?php
// Dirección de correo electrónico del destinatario
$destinatario = 'soporteclinicohpm@ssdr.gob.cl';

// Asunto del correo electrónico
$asunto = 'Prueba de correo electrónico con STARTTLS';

// Mensaje del correo electrónico
$mensaje = 'Hola, esto es una prueba de correo electrónico con STARTTLS.';

// Cabeceras adicionales
$headers = 'From: soporteclinicohpm@ssdr.gob.cl' . "\r\n" .
           'Reply-To: soporteclinicohpm@ssdr.gob.cl' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Configuración para establecer la conexión STARTTLS
$smtp_server = 'smtp-mail.outlook.com'; // Servidor SMTP
$smtp_port = 587; // Puerto SMTP
$username = 'soporteclinicohpm@ssdr.gob.cl'; // Nombre de usuario SMTP
$password = 'sopo.2018'; // Contraseña SMTP

// Configuración adicional para OpenSSL
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);

// Intenta enviar el correo electrónico
if (mail($destinatario, $asunto, $mensaje, $headers, "-f soporteclinicohpm@ssdr.gob.cl", "-r soporteclinicohpm@ssdr.gob.cl", "-S smtp=$smtp_server", "-S smtp_port=$smtp_port", "-S smtp_auth=login", "-S smtp_username=$username", "-S smtp_password=$password", "-S tls=yes", "-S ssl_cert_context=$context")) {
    echo 'Correo electrónico enviado correctamente.';
} else {
    echo 'Error al enviar el correo electrónico.';
}
?>
