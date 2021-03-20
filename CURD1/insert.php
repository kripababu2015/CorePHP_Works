<?php
$mysql=new mysqli("localhost","root","","yuva");
$uname=$_GET['name'];
$upassword=$_GET['password'];
$res=$mysql->query("insert into yuva_ker(user_name,user_password) values('$uname','$upassword')");

header("Location: index.php");

?>