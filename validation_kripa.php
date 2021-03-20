<?php

	$nameErr = $emailErr = "";  
	$name = $email = "";  
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	
	{
		// $n=$_POST['name'];
		// $e=$_POST['email'];
		// echo $n;
		// echo $e;
		if(empty($_POST['name']))
		{
			$nameErr= "name is required";
	
		}
		else
		{
			$name=$_POST['name'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
			
				$nameErr=" only letters and spaces allowed<br>";
			
			}
			// else{
			// 	$nameErr= $_POST['name']."<br>";
			// }
		}
		if(empty($_POST['email']))
		{
			$emailErr="email is required";
			
		}
		else
		{	$email=$_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr="invalid email";
			
			}
			// else{
			// 	$emailErr= $_POST['email'];
			// }

		}
        $link=mysqli_connect("localhost","root","","colleges");
	
        if($nameErr="" && $emailErr="")
		{	$name=$_POST[name];
            $email=$_POST[email];
			$qry="insert into demo(name,email) values('$name',$email')";
			mysqli_query($link,$qry);
		}
	}

?><html>
<head>
	<title>
		Login Page
	</title>
	<style>
	.error
	{
		color:red;
	}
	</style>
</head>
<body>
	<form action="validation.php" method="post">
	<table>
		<tr>
			<td>user name</td>
			<td><input type="text" name="name" value="<?php if($nameErr){ echo $name;}?>"></td>
			<td><span class="error">* <?php echo $nameErr; ?> </span> </td>

		</tr>
		<tr>
			<td>email id</td>
			<td><input type="text" name="email" value="<?php if($emailErr){ echo $email;}?>"></td>
			<td><span class="error">* <?php echo $emailErr; ?> </span> </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
	</form>
	

	
</body>
</html>
