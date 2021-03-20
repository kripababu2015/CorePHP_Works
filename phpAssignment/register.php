<?php
require('connect.php');
if(isset($_POST['submit']))
{
    $name=$_POST['sname'];
    $rollno=$_POST['srno'];
    $address=$_POST['add'];
    $email=$_POST['semail'];
	

$res="insert into student (name,rollno,address,email) values('$name','$rollno','$address','$email')";
if (mysqli_query($link,$res)) 
		{
		  echo "inserted successfully";
		} 
		else 
		{
		  echo "Error could not insert:<br>". mysqli_error($link);
		} 
header("Location: view.php");
}

?>