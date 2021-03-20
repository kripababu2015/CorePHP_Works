<?php
include('connect.php');
$sql="update student set address='hill view' where rollno=130";

mysqli_query($link, $sql);
header("Location:select.php");
?>