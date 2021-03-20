<?php
$link=mysqli_connect("localhost","root","","workphp");
if(isset($_POST['submit']))
{	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$district=$_POST['dis'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
		if($password==$cpassword)
		{
	$sql="update register set name='$name',district='$district',gender='$gender',password='$password',cpassword='$cpassword' where id='$id'";
	mysqli_query($link,$sql);
		}
	header('location:view.php');
	
}
?>
	