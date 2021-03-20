<?php
require('connect.php');
if(isset($_POST['submit']))
{
    $name=$_POST['sname'];
    $age=$_POST['sage'];
    $email=$_POST['semail'];
    $user=$_POST['suser'];
    $pass=$_POST['spass'];
$res="insert into register(name,age,email,userid,password) values('$name','$age','$email','$user','$pass')";
$result=mysqli_query($link,$res);
if($result)
{
    echo "inserted succesfully";
}
header('location:login.php');


}

?>