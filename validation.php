<?php
$link=mysqli_connect("localhost","root","","colleges");
$flag=0;
	$nameErr = $emailErr = " ";  
	$name = $email = " ";  
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	
	{
		// $n=$_POST['name'];
		// $e=$_POST['email'];
		// echo $n;
		// echo $e;
		if(empty($_POST['name']))
		{
			$nameErr= "name is required";
			$flag=1;
		}
		else
		{
			$name=$_POST['name'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
			
				$nameErr=" only letters and spaces allowed<br>";
				$flag=1;
			}
			// else{
			// 	$nameErr= $_POST['name']."<br>";
			// }
		}
		if(empty($_POST['email']))
		{
			$emailErr="email is required";
			$flag=1;
		}
		else
		{	$email=$_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr="invalid email";
				$flag=1;
			}
			// else{
			// 	$emailErr= $_POST['email'];
			// }

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
			<td><input type="text" name="name" value="<?php if($flag==1){ echo $name;}?>"></td>
			<td><span class="error">* <?php echo $nameErr; ?> </span> </td>

		</tr>
		<tr>
			<td>email id</td>
			<td><input type="text" name="email" value="<?php if($flag==1){ echo $email;}?>"></td>
			<td><span class="error">* <?php echo $emailErr; ?> </span> </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		if($flag==0)
		{	echo $nameErr;
			$qry="insert into demo(name,email) values('$_POST[name]','$_POST[email]')";
			mysqli_query($link,$qry);
		}
	}

	?>
</body>
</html>
