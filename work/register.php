<html>
<head>
<title>Register</title>
</head>
<body>
<fieldset>
<form action="insert.php" method="post">
<pre>
Name          <input type="text" name="name" placeholder="Name"><br>
District	  <select name="dis">
					<option></option>
					<option>TVM</option>
					<option>Kollam</option>
					<option>Pta</option>
					<option>Alapuzha</option>
					<option>Kochi</option>
					
				</select><br>
Gender <input type="radio" name="gender" id="female" value="female"><label for="female">female</label> <input type="radio" name="gender" id="male" value="male"><label for="male">male</label><br>
password         <input type="password" name="password">
confirm password <input type="password" name="cpassword">

			<input type="submit" value="register" name="submit">
</pre>

</form>
</fieldset>
</body>
</html>