<?php
require 'common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
$select_query="Select ID,Email,Password from fund_raiser";
$result= mysqli_query($con, $select_query)or die(mysqli_error($con));


  while( $row= mysqli_fetch_array($result)){
      echo $row['Email'];
   if($row['Email']==$email)
   {echo 'here';
       if($row['Password']==$password){
        $_SESSION['ID']=$row['ID'];
       echo 'Success';
       header("location:profile.php");
      break;
       }
       else
       {           echo '2';
          header("location:index.php?flag1=2&flag=&m1=&m2=");
           
       }
       
   }
   else
   {
       echo '1';
      header("location:index.php?flag1=1&flag=&m1=&m2=");
     }
     
   }
 
?>
