<?php
include('connect.php');
$id=$_GET['id'];
$sql="delete from staff where id='$id' ";

mysqli_query($link, $sql);
header("Location:register.php");
?>