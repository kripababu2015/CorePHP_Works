<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="CREATE TABLE student(rollno int(10),name varchar(20),age int(20),address varchar(30))";
if (mysqli_query($link, $sql)) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($link);
  }
  
  mysqli_close($link);
  ?>