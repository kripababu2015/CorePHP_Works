<?php
$mysql=new mysqli("localhost","root","","yuva");
$id=$_GET['id'];
$result=$mysql->query("delete from yuva_ker where user_id='$id'");
//header("Location: index.php");
if($result){
    echo "Deleted Successfully";
    echo "<BR>";
    echo "<a href='index.php'>Back to main page</a>";
    }
?>