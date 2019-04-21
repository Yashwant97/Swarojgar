<?php
include 'mail/contactmail.php';
$first=$_POST['firstname'];
$last=$_POST['lastname'];
$name=$first." ".$last;
$city=$_POST['country'];
$comments=$_POST['subject'];
$message=$comments.'\r\nFrom'.$name.'\r\n'.$city;
contactmail($message);
?>
