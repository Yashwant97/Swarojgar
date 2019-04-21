<?php
function contactmail($message){
require 'PHPMailer/PHPMailerAutoload.php';
$mail=new PHPMailer();
//$mail->SMTPDebug=1;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth='true';
$mail->Username='swarojgar84@gmail.com';
$mail->Password='swarojgar@4';
$mail->SMTPSecure='tls';
$mail->Port='587';
$mail->SetFrom('Developer@swarojgar.com','Developer');
$mail->addAddress('swarojgar84@gmail.com');
$mail->addReplyTo('Noreply@swarojgar.com','INFO');
$mail->Subject='Responce from User';
$mail->Body=$message;
$mail->SMTPOptions = array(
    'ssl' => array('verify_peer' => false,'verify_peer_name' => false, 'allow_self_signed' => true));
if($mail->send())
{header('location:../index.php?m1=Message Successfully sent');}
else 
{header('location:../index.php?m1=Message not sent');}}
?>