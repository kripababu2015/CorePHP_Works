<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO student(name,age,address) VALUES('ammu',27,'amala bhavan'),('ben',25,'ben house')";
if (mysqli_query($link, $sql)) {
    $last_id = mysqli_insert_id($link);
  echo "Last inserted ID is: " . $last_id;
  } else {
    echo "Error creating table: " . mysqli_error($link);
  }
  
  mysqli_close($link);



    