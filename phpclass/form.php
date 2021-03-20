<html>
<head>
<title>Login page</title>
<style>
h1
{
	text-align:center;
}
input
{
padding:20px;
margin:20px;	
text-align:center;
border:2px solid ;
}
form
{
border:2px solid ;
margin:2px;
	
}
</style>
</head>
<body>
<form action="login.php" method="POST">
<h1>LOGIN PAGE</h1>
<input type="text" placeholder="Username" name="uname"></br>
<input type="password" placeholder="Password" name="password"></br>
<input type="text" placeholder="rollnumber" name="rnum"></br>
<input type="submit" name="submit"></br>
</form>
<?php

?>
</body>
</html>