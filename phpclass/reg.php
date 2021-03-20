<title>Login page</title>
<style>
h1
{
	text-align:center;
}
form
{
padding:20px;
margin-top:1%;	
text-align:center;

}
input{
	margin:20px;
	padding:10px
}

</style>
</head>
<body>
<fieldset>
<form action="regaction.php" method="POST">
<h1>REGISTRATION FORM</h1>
<input type="text" placeholder="First Name" name="fname"></br>
<input type="text" placeholder="Last Name" name="lname"></br>
<input type="text" placeholder="rollnumber" name="rnum"></br>
<input type="email" placeholder="E-mail" name="email"></br>
<textarea placeholder="Address" name="address"> </textarea></br>
<input type="radio" name="gender" id="female"><label for="female">Female</label>
<input type="radio" name="gender" id="male"><label for="male">Male</label>
</br>
<input type="password" placeholder="Password" name="password"></br>

<input type="submit" name="submit"></br>
</form>
</fieldset>
<?php

?>
</body>
</html>