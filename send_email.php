if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $social = htmlspecialchars($_POST['social']);
    $reason = htmlspecialchars($_POST['reason']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = "mariocastro1205@gmail.com";  // Replace with your email address
    $subject = "Nuevo contacto desde el sitio web";
    
    // Email body content
    $body = "Nombre: $name\n";
    $body .= "Correo: $email\n";
    $body .= "Red social de contacto: $social\n";
    $body .= "Motivo de contacto: $reason\n";
    $body .= "Mensaje: $message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}