<html>
<head>
<title>Register</title>
</head>
<body>
<?php
$id=$_GET['id'];
$link=mysqli_connect("localhost","root","","workphp");
$sql="select * from register where id='$id'";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res))
{
	

?>
<fieldset>
<form action="editq.php" method="post">
<pre>
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
Name          <input type="text" name="name" placeholder="Name" value="<?php echo $row['name']?>"><br>
District	  <select name="dis">
					<option><?php echo $row['district']?></option>
					<option>TVM</option>
					<option>Kollam</option>
					<option>Pta</option>
					<option>Alapuzha</option>
					<option>Kochi</option>
					
				</select><br>
Gender			<select name="gender">
					<option><?php echo $row['gender']?></option>
					<option>female</option>
					<option>male</option>
					
					
				</select><br>

password         <input type="text" name="password" value="<?php echo $row['password']?>">
confirm password <input type="text" name="cpassword"value="<?php echo $row['cpassword']?>">

			<input type="submit" value="register" name="submit">
</pre>

</form>
</fieldset>
<?php
}
?>
</body>
</html>