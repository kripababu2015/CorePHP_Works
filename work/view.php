<html>
<head>
<title>view</title>
</head>
<body>
<table border="1">
<tr>
<th>name</th>
<th>district</th>
<th>gender</th>
<th>password</th>
<th>confirm password</th>
<th>Action</th>
</tr>


<?php
$link=mysqli_connect("localhost","root","","workphp");
$sql="select * from register";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res))
{
	

?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['district']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['cpassword']; ?></td>
<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</td>

</tr>
<?php
}
?>
</table>
</body>
</html>
