<?php
$mysql=new mysqli("localhost","root","","yuva");
$id=$_POST['user_id'];
mysqli_query($mysql,"delete from yuva_ker where user_id={$id}");
?>