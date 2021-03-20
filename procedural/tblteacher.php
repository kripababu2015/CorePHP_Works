<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="CREATE TABLE teacher(tid int(10),tname varchar(20),salary int(20),taddress varchar(30))";
if (mysqli_query($link, $sql)) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($link);
  }
  
  mysqli_close($link);
  ?>