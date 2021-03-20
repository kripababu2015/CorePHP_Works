<?php
require('connect.php');
$id=$_POST['id'];
$qry="select * from register where id='$id'";
$res=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($res))
{
echo"
<h1 align='center'>BIODATA</h1>
<table align='center'>
<tr>
<td>Name: </td><td>".$row['name']."</td>
</tr>
<tr></tr>
<tr>
<td>Address: </td><td>".$row['address']."</td>
</tr>
<tr></tr>
<tr>
<td>Gender: </td><td>".$row['gender']."</td>
</tr>
<tr></tr>
<tr>
<td>Age: </td><td>".$row['age']."</td>
</tr><tr></tr>
<tr>
<td>Email: </td><td>".$row['email']."</td>
</tr>
</table>";
}

?>