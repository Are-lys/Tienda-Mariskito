<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'Libraries/phpmailer/Exception.php';
    require 'Libraries/phpmailer/PHPMailer.php';
    require 'Libraries/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configuración del servidor
    $mail->SMTPDebug = 2; // Mostrar salida detallada para depuración
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'arelyschancay@gmail.com'; // Tu Gmail
    $mail->Password   = 'xxbjotwlmjerojrr'; // IMPORTANTE
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Remitente y destinatario
    $mail->setFrom('arelyschancay@gmail.com', 'Prueba Local');
    $mail->addAddress('ssoftcomsas@gmail.com', 'Destinatario de prueba'); // Cámbialo por el tuyo

    // Contenido del mensaje
    $mail->isHTML(true);
    $mail->Subject = 'Correo de prueba desde servidor local';
    $mail->Body    = '<h3>¡Éxito! Este es un correo de prueba enviado desde PHPMailer en localhost.</h3>';
    $mail->AltBody = '¡Éxito! Este es un correo de prueba enviado desde PHPMailer en localhost.';

    $mail->send();
    echo '✅ El mensaje fue enviado correctamente';
} catch (Exception $e) {
    echo "❌ Error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>
