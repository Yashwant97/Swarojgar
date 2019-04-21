<?php
require 'common.php';
$ID=$_SESSION['ID'];
$Subject= mysqli_escape_string($con, $_POST['Subject']);
$Description= mysqli_escape_string($con, $_POST['Desc']);
$no_of_mem=mysqli_escape_string($con, $_POST['members']);
$Estmtd_fund=mysqli_escape_string($con, $_POST['fund']);
$query="Insert into women_idea values(NULL,'".$Subject."','".$Description."',".$ID.",".$no_of_mem.",".$Estmtd_fund.");";
$result= mysqli_query($con, $query);
$query="Update women_details Set Idea='yes' where ID=".$ID.";"; 
$result= mysqli_query($con, $query);
header('location:profile.php');
?>