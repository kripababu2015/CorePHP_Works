<?php
include('connect.php');
$id=$_GET['id'];
$sql="delete from dish where id='$id' ";

mysqli_query($link, $sql);
header("Location:viewdish.php");
?>