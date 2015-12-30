<?php


require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

echo $name = $_POST["name"];
echo $email = $_POST["email"];
echo $tel = $_POST["tel"];
$message = $_POST["message"];

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
//$mail->Username = "ventas1.opc@gmail.com";
//$mail->Password = "colectivo16";
$mail->Username = "oscar.luis.garcia94@gmail.com";
$mail->Password = "rayados94";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom($email, $name);
$mail->addAddress('ventas1.opc@gmail.com', 'Ventas OPC');

$mail->Subject = 'Contacto';
$mail->Body = $message . ' Mi Telefono es '.$tel;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    header("Location: ../index.html");

}
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 29/12/15
 * Time: 9:26 PM
 */