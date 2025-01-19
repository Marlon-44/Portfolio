<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "marlondavidag44@outlook.com"; // Cambia esto a tu correo
    $subject = "Nuevo mensaje de contacto";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método no permitido.";
}
?>
