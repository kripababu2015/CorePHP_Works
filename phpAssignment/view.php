<html>
<body>
<h3><a href="#"></a></h3>
<form action="" method="get"> 
<table border='1'>
<thead>
<tr>
<th>SlNo</th>
<th>Name</th>
<th>Roll No</th>
<th>Address</th>
<th>Email id</th>
<th colspan="2">Action</th>
</tr>
</thead>
<tbody><?php
require('connect.php');
$sql="select * from student";
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>
    <td>".$row['slno']."</td>
    <td>".$row['name']."</td>
    <td>".$row['rollno']."</td>
    <td>".$row['address']."</td>
    <td>".$row['email']."</td>
    <td><a href='edit.php?id=".$row['slno']."'>Edit</a></td>
    <td><a href='delete.php?id=".$row['slno']."''>Delete</a></td>
    </tr>";
}
  mysqli_close($link);
?>

</table>
</form>
<h3><a href="reg.php">Back to Registration page</a></h3>
</body>
</html>

