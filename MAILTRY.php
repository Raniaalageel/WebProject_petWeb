<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure= 'ssl';
$mail->Host="smtp.gmail.com";
$mail->Port='465';
$mail->isHTML();
$mail->Username="webetscompany@gmail.com";
$mail->Password ='webets123';
$mail->SetFrom('no-reply@webets.org');
$mail->Subject ='Hello World';
$mail->Body ='A test email';
$mail->AddAddress("amani.aldahmash@gmail.com");
$mail->Send();
?>