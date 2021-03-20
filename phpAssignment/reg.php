<html>
<head>
	<title>
		Registration Page
	</title>
    <style>
    table,td
    {
        text-align:center;
        margin:10px;
        padding:20px;

    }
    </style>
</head>
<body>
<fieldset align="center">
<h1>Registration Form</h1>
	<form action="register.php" method="post">
	<table>
		<tr>
			<td>Student Name</td>
			<td><input type="text" name="sname"></td>
		</tr>
		<tr>
			<td>Rollno</td>
			<td><input type="text" name="srno"></td>
		</tr>
        <tr>
			<td>Student Address</td>
			<td><textarea name="add"></textarea></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="email" name="semail"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="LOGIN"></td>
		</tr>
	</table>
	</form>
    </fieldset>
</body>
</html>