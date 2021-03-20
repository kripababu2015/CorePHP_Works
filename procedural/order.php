<html>
<body>
<h3><a href="#"></a></h3>
<form> 
<table border='1'>
<thead>
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>

</tr>
</thead>
<tbody><?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="select * from student order by name desc";

$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>

    <td>".$row['rollno']."</td>
    <td>".$row['name']."</td>
    <td>".$row['age']."</td>
    <td>".$row['address']."</td>
    </tr>";
}
  mysqli_close($link);
?>
</table>
</form>
</body>
</html>

