<html>
<body>
<form action="viewuser.php" method="post" align="center">
<h1>To View User Biodata</h1>
<div>
</div>
<label>SELECT USER ID </label>
<select name="id">
<?php 
require('connect.php');
$qry="select * from register";
$res=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($res))
{
?>

<option><?php echo $row['id'] ?></option>

<?php
}
?>
</select><br>
<input type="submit" value="ok" name="submit">
</form>
</body>
</html>