<html>
<head>
	<title>
		Registration Form
	</title>
	<style>
		table
		{
			text-align:center;
			margin: 20px;
			padding:20px;

		}
		body
		{
			text-align: center;
			margin:30px;
		}
		tr,td
		{
			margin:30px;
			padding: 15px;
		}
		fieldset
		{
			width:500px;

			margin-left: 300px;
		}
		input
		{
			
		}
	</style>
</head>
<body>
	
	<fieldset>
	<table>
		
			<h1>Add Notifications</h1>
			<form action="" method="post">
				<tr><td> Name:</td><td><input type="text" name="name"></td></tr>
				<tr><td>Address:</td><td><textarea name="address"></textarea></td></tr>
				<tr><td>District:</td><td>
					<select name="dis">
						<option>TVM</option>
						<option>KOLLAM</option>
						<option>PTA</option>
						<option>ALAPUZHA</option>
						<option>KOTTAYAM</option>
						<option>EKLM</option>
						<option>IDUKKI</option>
						<option>THRISSUR</option>
						<option>PALAKKAD</option>
						<option>WAYANAD</option>
						<option>KOZHIKODE</option>
						<option>MALAPPURAM</option>
						<option>KANNUR</option>
						<option>KASARGODE</option>

					</select>

				</td></tr>
				<tr><td>Pin code:</td><td><input type="text" name="pin"></td></tr>
				<tr><td>Phone Number:</td><td><input type="text" name="phone"></td></tr>
		
				<tr><td>Gender</td><td><input type="radio" name="gender" id="m" value="Male"><label for="m">Male</label></td>
				<td><input type="radio" name="gender" id="f" value="Female"><label for="f">Female</label></td></tr>
				<tr><td>Age:</td><td><input type="text" name="age"></td></tr>
				<tr><td>Subject:</td><td>
					<select name="subject">
                    <option></option>
						<option>English</option>
						<option>Codeigniter</option>
						<option>Java Script</option>
						<option>Python</option>
						<option>Java</option>
					</select>
				</td></tr>
                <tr><td>Hobbies</td>
                <td><input type="checkbox" value="gardening" name="hobbie">Gardening</td>
                <td><input type="checkbox" value="reading" name="hobbie">Reading</td></tr>
				<tr><td>E-mail:</td><td><input type="text" name="email"></td></tr>
				<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
				<tr><td></td><td><input type="submit" name="submit"></td></tr>
		
			</form>
            <?php
            if(isset($_POST['submit']))
	{
		
		if(empty($_POST['name']))
		{
			echo"name is required <br>";
		}
	
		else
		{
			
			$name=$_POST['name'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
				echo $_POST['name']."<br>";
			echo " only letters and spaces allowed<br>";
			}

		}
		if(empty($_POST['email']))
		{
			echo"email is required <br>";
		}
		else
		{	
			$email=$_POST['email'];
			$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
			if (!preg_match ($pattern, $email) )
			{  
    			$ErrMsg = "Email is not valid.";  
            	echo $ErrMsg;  
			}
		
			else
			 {  
    			echo "Your valid email address is: " .$email."<br>";  
			}
		}

		
        if(empty($_POST['gender']))
		{
			echo"gender is required <br>";
		}
		else
		{
			echo $_POST['gender']."<br>";

		}
        if(empty($_POST['subject']))
		{
			echo"subject is required <br>";
		}
		else
		{
			echo $_POST['subject']."<br>";

		}
        if(empty($_POST['hobbie']))
		{
			echo"hobbie is required <br>";
		}
		else
		{
			echo $_POST['hobbie']."<br>";

		}
	}
    ?>
	
	</table>
	</fieldset>
		
</body>
</html>