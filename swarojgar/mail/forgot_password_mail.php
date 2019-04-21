<?php
function forgot_mail($email){
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
$mail->isHTML(TRUE);
$mail->SetFrom('Developer@swarojgar.com','Developer');
$mail->addAddress($email);
$mail->addReplyTo('Noreply@swarojgar.com','INFO');
$mail->Subject='Forgot Password Recovery';
$mail->Body="To reset your Password click on the link below: <br> <a href='localhost/swarojgar/resetpassword.php'>here</a>";
$mail->SMTPOptions = array(
    'ssl' => array('verify_peer' => false,'verify_peer_name' => false, 'allow_self_signed' => true));
if($mail->send())
{header('location:forgot.php?m1=Message Successfully sent Check the link');}
else 
{header('location:forgot.php?m1=Message not sent check Your email ID');}}
?>