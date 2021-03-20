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
<form action="formaction.php" method="post">
<h1></h1>
<input type="text" placeholder="name" name="sname"></br>
<input type="text" placeholder="age" name="sage"></br>
<input type="text" placeholder="Address" name="saddress"></br>
<input type="submit" name="submit" value="submit"></br>
</form>
<?php

?>
</body>
</html>