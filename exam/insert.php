<?php
require('connect.php');
if(isset($_POST['submit']))
{
    $uname=$_POST['name'];
    $uaddress=$_POST['address'];
    $ugender=$_POST['gender'];
    $uage=$_POST['age'];
    $uemail=$_POST['email'];
    $upass=$_POST['password'];
    $qry="insert into register(name,address,gender,age,email,password) values('$uname','$uaddress','$ugender','$uage','$uemail','$upass')";
    if(mysqli_query($link,$qry))
    {
        echo "data inserted succesfully";
    }
    header("Location:register.php");
}
?>