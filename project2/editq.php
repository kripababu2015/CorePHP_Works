<?php
require('connect.php');


    $id=$_POST['id'];

    $ufname=$_POST['fname'];
    $ulname=$_POST['lname'];
    $uemail=$_POST['email'];
    $res="UPDATE staff SET fname='$ufname',lname='$ulname',email='$uemail' where id='$id'";
    mysqli_query($link,$res);
     header("Location: register.php");


?>