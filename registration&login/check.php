<?php
require('connect.php');
if(isset($_POST['login']))
{
    $uname=$_POST['uid'];
    $upass=$_POST['pass'];
    $flag=0;
    $res="select * from register";
    $result=mysqli_query($link,$res);
    while($row=mysqli_fetch_array($result))
        {
    
            if($row['userid']==$uname && $row['password']==$upass)
            {
                echo "Succesfully Login";
                $flag=1;
                break;
            }
                
            
        }
        if($flag==0)
        {
            echo"not found";
               header('location:register.php');
        }
    
}
    ?>