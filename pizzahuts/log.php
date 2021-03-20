<?php
session_start();
/* $_SESSION["name"]=$_POST['email'];*/

require('connect.php');
$uemail=$_POST['email'];
    $upass=$_POST['password'];
 $resl="select * from login,register where login.id=register.loginid ";
$result1=mysqli_query($link,$resl);
    while($row1=mysqli_fetch_array($result1))
    {
    if($row1['email']==$uemail && $row1['password']==$upass)
    {
	$_SESSION["name"]=$row1['name'];
    $_SESSION["id"]=$row1['loginid'];
    echo $_SESSION["name"];
    }
    }

if(isset($_POST['submit']))
{
    
    
    
    $flag=0;
    $res="select * from login";
    $result=mysqli_query($link,$res);
    while($row=mysqli_fetch_array($result))
        {
    
            if($row['email']==$uemail && $row['password']==$upass && $row['utype']=='1')
            {
                echo "Succesfully Login";
             header('Location:admin_homepage.php');
                $flag=1;
                break;
                
            }
            if($row['email']==$uemail && $row['password']==$upass && $row['utype']=='0')
            {
                
                echo "Succesfully Login";
            header('Location:user_home.php');
                $flag=1;
                break;
                
            
            }
            
           
             
            
        
        }
}
if($flag==0)
            {
                echo "invalid user";
                 header('location:login.php');
            
            }
            

    ?>