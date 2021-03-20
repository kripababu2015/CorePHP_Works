<?php
require('connect.php');
$sql="CREATE DATABASE college";
if(mysqli_query($link,$sql))
{
    echo"Database created successfully";

}
else
{
    echo "database could not able to connect $sql".mysqli_error($link);
}
?>