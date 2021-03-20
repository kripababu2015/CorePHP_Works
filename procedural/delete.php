<?php
include('connect.php');
$sql="delete from student where rollno=130 ";

mysqli_query($link, $sql);
header("Location:select.php");
?>