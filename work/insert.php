<?php
$link=mysqli_connect("localhost","root","","workphp");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$district=$_POST['dis'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	if($password==$cpassword)
	{
	$sql="insert into register(name,district,gender,password,cpassword) values('$name','$district','$gender','$password','$cpassword')";
	mysqli_query($link,$sql);
	}
	
}
?>
	