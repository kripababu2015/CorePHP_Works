<?php
$mysql=new mysqli("localhost","root","","yuva");
#data insertion
#$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values('mahima',',mahima123',1)");
#data updation
//$query=$mysql->query("update yuva_ker set user_name='test' where user_id=6");
#delete query
#$query=$mysql->query("delete from yuva_ker where user_id=1");
#$name="Radhu";
//$query=$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values('name',',rd123',2)");
/*f($query)
{
    echo" update succesfully";
} 
else
{
    echo" not updated ";
}
*/


$res=mysqli_query($mysql,"select * from yuva_ker");
echo "<form action=# method=POST>";
echo "<table border='1'>
<tr>
<th>User Id</th>
<th>User Name</th>
<th>Password</th>
<th>status</th>
<th>action</th></tr>";

    while($q=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>".$q['user_id']."</td>";
    echo"<td>".$q['user_name']."</td>";
    echo"<td>".$q['user_password']."</td>";
    echo"<td>".$q['user_status']."</td>";
   echo "<td>"."<a href='delete.php?id={$q['user_id']}'>Delete</a>"."</td>";
    echo"</tr>";
    }

echo"</table>";
echo "</form>"

/*
$query=$mysql->query("select * from yuva_ker");
while($row=$query->fetch_assoc())
{
    echo $row['user_id']."".$row['user_password']."<br>";

}
*/
/*
$sql="select * from yuva_ker";
$res=mysqli_query($mysql,$sql);
while($q=mysqli_fetch_array($res))
{
    echo "name".$q['user_name'];
}
  */  
?>
 