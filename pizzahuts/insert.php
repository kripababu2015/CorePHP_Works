<?php
$link=mysqli_connect("localhost","root","","pizzahut");
//$id=$_GET['id'];
$name=$_GET['name'];
$address=$_GET['address'];
$phno=$_GET['phone'];
$email=$_GET['email'];
$password=$_GET['password'];
$sql1="insert into login(email,password,utype) values('$email','$password','0')";
mysqli_query($link,$sql1);
$sql="insert into register(name,address,phno,loginid) values('$name','$address','$phno',
(select id from login where email='$email'))";

mysqli_query($link,$sql);



header('location:register.php')
?>