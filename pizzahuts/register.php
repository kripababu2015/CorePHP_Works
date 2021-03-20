<html>
<head>
	<title>Registration</title>
	<style>
	
		table,tr,td
		{
			text-align:center;
			padding: 20px;
			margin:10px;
			font-size: 20px;
			color:white;
		}
		fieldset
		{
			width:300px;
			height: 230px;
			margin-left: 480px;
			margin-top: 100%;
			font-size: 20px;
			background-color:rgba(0,0,0,0.3);
			
			height:600px;
			
		}
		body
		{
			background-image:url("img/pizza2.jpeg");
			background-repeat:;
			background-attachment: cover;
			width:150px;;
			height:150px;
		}
	
		form,fieldset,table,td
		{
			
			padding: 20px;
			margin: 30px;
			border-collapse: collapse;
			text-align: center;
			font-size: 20px;
		}
		form
		{
			margin-left: 400px;

		}
		.error {color: #FF0000;}

	</style>
</head>
<body>

	<form method="GET" action="insert.php">
		<fieldset style="text-align: center; width: 250px;color:white;" >
		<legend>Reg</legend>
		<table>
			<tr>
				<td>
					Name:
					</td>
					<td>
						<input type="text" name="name" placeholder="name">
					</td>
					
			</tr>
			<tr>
				<td>
					Address:
				</td>
					<td>
						<textarea name="address" placeholder="address" style="width: 170px; height: 100px;"></textarea>
					</td>
					
			</tr>
			
			<tr>
				<td>
					Phone No:
				</td>
				<td>
					<input type="text" name="phone" placeholder="phone">
				</td>
				
			</tr>
			<tr>
				<td>
					Email-Id:
				</td>
				<td>
					<input type="email" name="email" placeholder="email">
				</td>
				
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password" placeholder="password">
				</td>
				
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit">
			

			</td>
		</tr>
		</table>
	</fieldset>
	</form>

</body>
</html>