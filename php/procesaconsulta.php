<?php

require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/phpmailer/phpmailer/src/Exception.php';
require_once '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once '../vendor/phpmailer/phpmailer/src/SMTP.php';

$nombre = $_POST["name"];
$correo = $_POST["email"];
$asunto = $_POST["subject"];
$mensaje = $_POST["body"];

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sendmundopuertoweb@gmail.com';                     //SMTP username
    $mail->Password   = 'sendwebmailMP2023';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sendmundopuertoweb@gmail.com');
    $mail->addAddress('info@mundopuerto.ar', 'Fundación Mundo Puerto');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body = '<h2>Nombre:</h2>'.$nombre. '<h2>Email:</h2>'.$correo. '<h2>Asutno:</h2>'.$asunto.'<h2>Mensaje:</h2>'.$mensaje.
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Su mensaje fue enviado, a la brevedad nos contactaremos';
} catch (Exception $e) {
    echo "Su mensaje no fue enviado. Error: {$mail->ErrorInfo}";
}



?>