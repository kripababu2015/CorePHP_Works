<?php
require('connect.php');
$sql="CREATE TABLE student(name varchar(20),rollno int(10),address varchar(50),email varchar(30))";
if (mysqli_query($link, $sql)) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($link);
  }
  
  mysqli_close($link);
  ?>