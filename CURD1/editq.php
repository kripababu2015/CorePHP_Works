<?php
$mysql=new mysqli("localhost","root","","yuva");


    $id=$_GET['id'];
    $uname=$_GET['uname'];
    $upass=$_GET['upass'];
    $mysql->query("UPDATE yuva_ker SET user_name='$uname',user_password='$upass' where user_id='$id'");
     header("Location: index.php");


?>