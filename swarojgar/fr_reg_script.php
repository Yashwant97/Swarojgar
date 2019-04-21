<?php

require("common.php");
    
  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['fname']." ".$_POST['lname'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['Password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $phone = $_POST['Phone'];
  $phone = mysqli_real_escape_string($con, $phone);

 
  $address = $_POST['Address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "{10}";

  $query = "SELECT * FROM fund_raiser WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "Email Already Exists";
    header('location: index.php?m3=' . $m."&m4=&flag1=2&flag=&m1=&m2=");
  } else if (!preg_match($regex_email, $email)) {
    $m = "Not a valid Email Id";
    header('location: index.php?m3=' . $m."&m4=&flag1=2&flag=&m1=&m2=");
  } else if (preg_match($regex_num, $contact)) {
    $m = "Not a valid phone number";
    header('location: index.php?m4=' . $m."&m3=&flag1=2&flag=&m1=&m2=");
  } else {
    
    $query = "INSERT INTO fund_raiser(Name, Email, Password, Phone, Address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $phone .  "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: ../profile.php');
  }
?>
