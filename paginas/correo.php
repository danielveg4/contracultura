<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();


    $to = "dvgilles@gmail.com";  
    $subject = "Nuevo mensaje de Contracultura";
    $message = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje:\n$mensaje";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: index_maqueta.php");
        exit();
    } else {
        echo "Error al enviar el mensaje.";
    }
}

?>