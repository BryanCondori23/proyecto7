

<?php
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $to = 'bryan.condori@est.edu.bo'; // Reemplaza con tu dirección de correo electrónico
    $subject = 'Nuevo mensaje de contacto';
    $message = "Nombre: $nombre\n\nEmail: $email\n\nMensaje: $mensaje";
    $headers = "From: $email";
    
    if(mail($to, $subject, $message, $headers)){
        echo "El mensaje ha sido enviado correctamente.";
    } else{
        echo "Ha ocurrido un error al enviar el mensaje.";
    }
}
?>