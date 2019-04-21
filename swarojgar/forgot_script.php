<?php
require 'common.php';
include 'mail/forgot_password_mail.php';
$email= mysqli_escape_string($con, $_POST['email']);
$query="Select * from fund_raiser where Email='".$email."';";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
$num= mysqli_num_rows($result);
if($num != 0)
{
      require_once( forgot_mail($email));
    header('location:forgot.php?m1=show');

}
else
{
      header('location:forgot.php?m1=No Such Id Exists');
}
?>