<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "anabelagallegos0@gmail.com";
    $asunto = "Nuevo mensaje de formulario de contacto";

    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Correo: $correo\n";
    $cuerpo .= "Tema: $tema\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Enviar correo
    mail($destinatario, $asunto, $cuerpo);

    // Redirigir a una página de confirmación
    header("Location: confirmacion.html");
}
?>
