<?php
include('connect.php');
$id=$_GET['id'];
$sql="delete from student where slno='$id' ";

mysqli_query($link, $sql);
header("Location:view.php");
?>