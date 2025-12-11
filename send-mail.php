<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "jeanf2805@gmail.com";
    $subject = "Nuevo mensaje de tu portafolio";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Método no permitido.";
}
?>
