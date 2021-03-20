<html>
<body>
<h3><a href="#"></a></h3>
<form action="" method="get"> 
<table border='1'>
<thead>
<tr>
<th>Name</th>
<th>Address</th>
<th>Dish</th>
<th>Order Type</th>
<th>Pizza Size</th>
</tr>
</thead>
<tbody><?php
require('connect.php');
$sql="select * from orderdish";
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>
    <td>".$row['name']."</td>
    <td>".$row['address']."</td>
    <td>".$row['dish']."</td>
     <td>".$row['ordertype']."</td>
     <td>".$row['pizzasize']."</td>
    
    </tr>";
}
  mysqli_close($link);
?>
</table>
</form>
</body>
</html>
