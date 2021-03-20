<?php
require('connect.php');


    $id=$_GET['id'];

    $dname=$_GET['dname'];
    $price=$_GET['price'];
    $res="UPDATE dish SET dname='$dname',price='$price' where id='$id'";
    mysqli_query($link,$res);
     header("Location: viewdish.php");


?>