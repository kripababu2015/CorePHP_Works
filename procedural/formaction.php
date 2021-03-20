<?php
include('connect.php');
if(isset($_POST['submit']))
{
    $name=$_POST['sname'];
    $age=$_POST['sage'];
    $address=$_POST['saddress'];
	echo "$name";

$res="insert into student (name,age,address) values('$name','$age','$address')";
if (mysqli_query($link,$res)) 
		{
		  echo "inserted successfully";
		} 
		else 
		{
		  echo "Error could not insert:<br>". mysqli_error($link);
		} 
//header("Location: form.php");
}

?>