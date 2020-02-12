<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();// Set mailer to use SMTP
    $mail->CharSet = "utf-8";// set charset to utf8
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

    $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
    $mail->Port = 587;// TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isHTML(true);// Set email format to HTML

    $mail->Username = 'lupapassukpbj@gmail.com';// SMTP username
    $mail->Password = 'lp53t4l4';// SMTP password

    $mail->setFrom('lupapassukpbj@gmail.com', 'LUPA PASSWORD - UKPBJ KAB. TANAH LAUT');//Your application NAME and EMAIL
    $mail->Subject = 'Lupa Password';//Message subject
    $mail->MsgHTML('Halo, ini adalah password ada : ');// Message body
    $mail->addAddress('auliarahmed@gmail.com', '');// Target email


    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>