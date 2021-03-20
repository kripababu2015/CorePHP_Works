<!DOCTYPE html>
<html>
<head>
	
	<style>
		table,tr,td
		{
			text-align:center;
			padding: 20px;
			margin:10px;
			font-size: 20px;
		}
		fieldset
		{
			width:300px;
			height: 230px;
			margin-left: 480px;
			margin-top: 100%;
			font-size: 20px;
			background-color:rgba(0,0,0,0.3);
			color:white;
			
		}
		body
		{
			background-image:url("img/pizza2.jpeg");
			background-repeat:;
			background-attachment: cover;
			width:150px;;
			height:150px;
		}
	</style>
</head>
<body>
	<?php require('nav.php'); ?>
	<form action="" method="POST">
	<div class="img">
		<fieldset>
			<legend> Add Dish </legend>
			
		<table>
			<tr>
				<td>Dish Name</td>
				<td><input type="text" name="dname"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="ADD">
				</td>
			</tr>
		</table>
	</div>
	</fieldset>
		
</form>
</body>
</html>


<?php 
require('connect.php');
 if(isset($_POST['submit']))
  { 
 $dname = $_POST["dname"];
 $price = $_POST["price"]; 
$qry="insert into dish(dname,price) values('$dname','$price')";
mysqli_query($link,$qry);
 }
?>

