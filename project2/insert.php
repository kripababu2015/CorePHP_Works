<?php 
require('connect.php');
 if(isset($_POST['submit']))
  { 
 $fname = $_POST["fname"];
 $lname = $_POST["lname"]; 
 $email = $_POST["email"]; 
$qry="insert into staff(fname,lname,email) values('$fname','$lname','$email')";
mysqli_query($link,$qry);
 }
?>
