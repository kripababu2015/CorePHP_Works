<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
	<form action="log.php" method="POST">
	<img src="">
	<div class="img">
		<fieldset>
			<legend>login</legend>
			
		<table>
			<tr>
				<td>Emailid</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Paasword</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</div>
	</fieldset>
		
</form>
</body>
</html>
