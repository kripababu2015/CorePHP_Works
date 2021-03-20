<html>
<body>
<h3><a href="#"></a></h3>
<form action="" method="get"> 
<table border='1'>
<thead>
<tr>
<th>SlNo</th>
<th>Dish</th>
<th>Price</th>

<th colspan="2">Action</th>
</tr>
</thead>
<tbody><?php
require('connect.php');
$sql="select * from dish";
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['dname']."</td>
    <td>".$row['price']."</td>
    <td><a href='edit.php?id=".$row['id']."'>Edit</a></td>
    <td><a href='delete.php?id=".$row['id']."''>Delete</a></td>
    </tr>";
}
  mysqli_close($link);
?>
</table>
</form>
</body>
</html>
