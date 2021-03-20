<?php
require('connect.php');
$id=$_GET['id'];
$qry="select * from staff where id='$id'";
$res=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($res))
{
echo"
<h1 align='center'>BIODATA</h1>
<table align='center'>
<tr>
<td> First Name: </td><td>".$row['fname']."</td>
</tr>
<tr></tr>
<tr>
<td>Last Name: </td><td>".$row['lname']."</td>
</tr>
<tr></tr>
<tr>
<td>Email: </td><td>".$row['email']."</td>
</tr>
</table>";
}
echo "<a href='register.php'>back to Registration page</a>";


?>