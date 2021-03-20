<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO teacher(tid,tname,salary,taddress) VALUES(12,'Anjali',23,'Anjali bhavan')";
if (mysqli_query($link, $sql)) {
    echo "succecfully inserted";
  } else {
    echo "Error creating table: " . mysqli_error($link);
  }
  
  mysqli_close($link);



    