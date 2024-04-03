<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "Cuevasalexandro@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico

    $asunto = "Nuevo mensaje del formulario de contacto";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    $headers = "From: $nombre <$email>";

    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        echo "<p>¡El mensaje ha sido enviado con éxito!</p>";
    } else {
        echo "<p>¡Error! El mensaje no se pudo enviar.</p>";
    }
}
?>
