<?php

 require("connect_db.php");

if(isset($_POST['tutor']) ) {
$destino=$_POST["tutor"];
$asunto=$_POST["tipos"];
$cuerpo=$_POST["desarrollo"];

}
//$asunto=$_POST["asunto1"];
///$contenido=$_POST["desarrollo"];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'alertasparapadres@gmail.com';                     // SMTP username
    $mail->Password   = 'RODRIGUEZ3030';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('alertasparapadres@gmail.com', 'Alertas Para Padres');
    $mail->addAddress($destino, '');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;

    $mail->send();
    $dt1=date("Y-m-d"); 

    $consulta2 = "INSERT INTO correos(destinatario,fecha) values ('Se envió aviso al siguiente correo: $destino','$dt1')";
    $resultado2=mysqli_query($link, $consulta2);

    echo 'Mensaje enviado';
   
    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
