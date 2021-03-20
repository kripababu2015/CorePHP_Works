<?php
$mysql=new mysqli("localhost","root","","yuva");
$user_name=$_GET["user_name"];
$password=$_GET["user_password"];
$query=$mysql->query("insert into yuva_ker (user_name,user_password) values ('$user_name','$password')");
?>