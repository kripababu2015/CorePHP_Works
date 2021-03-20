<?php
$mysql=new mysqli("localhost","root","","yuva");
$user_id=$_GET['id'];
$query=$mysql->query("delete from yuva_ker where user_id=$user_id");
header("Location: front.php");
?>