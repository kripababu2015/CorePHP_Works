<?php
require('connect.php');


    $id=$_GET['id'];

    $uname=$_GET['sname'];
    $urno=$_GET['srno'];
    $uadd=$_GET['saddress'];
    $uemail=$_GET['email'];
    $res="UPDATE student SET name='$uname',rollno='$urno',address='$uadd',email='$uemail' where slno='$id'";
    mysqli_query($link,$res);
     header("Location: view.php");


?>