<?php
	
	$nameErr = $emailErr = $ageErr = $usernameErr = $passwordErr = "";  
	$name = $email = $age= $uname = $password = "";  
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	
	{
		if(empty($_POST['sname']))
		{
			$nameErr= "name is required";
	
		}
		else
		{
			$name=$_POST['sname'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
			
				$nameErr=" only letters and spaces allowed<br>";
			
			}
			
		}
		if(empty($_POST['semail']))
		{
			$emailErr="email is required";
			
		}
		else
		{	$email=$_POST['semail'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr="invalid email";
			
			}
			
		}
		if(empty($_POST['sage']))
		{
			$ageErr="age is required";
			
		}
		else
		{
			$age = $_POST ["sage"];  
			if (!preg_match ("/^[0-9]*$/", $age) )
			{  
		    	$ageErr = "Only numeric value is allowed.";  
		    	 
			}	 
	
		}
		if(empty($_POST['suser']))
		{
			$nameErr= "name is required";
	
		}
		else
		{
			$uname=$_POST['suser'];
			if(!preg_match("/^[a-zA-Z ]*$/",$uname))
			{
			
				$usernameErr=" only letters and spaces allowed<br>";
			
			}
			
		}
		//Validates password & confirm passwords.
    if(empty($_POST['spass'])) 
    	{
    		$passwordErr= "password is required";
	
		}
		else
		{
			$password=$_POST['spass'];
		    
		    if (strlen($_POST["spass"]) <= '8')
		     {
		        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		    }
		    elseif(!preg_match("#[0-9]+#",$password))
		     {
		        $passwordErr = "Your Password Must Contain At Least 1 Number!";
		    }
		    elseif(!preg_match("#[A-Z]+#",$password))
		     {
		        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		    }
		    elseif(!preg_match("#[a-z]+#",$password)) 
		    {
		        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		    }
		}




        $link=mysqli_connect("localhost","root","","colleges");
	
         if($nameErr=="" && $emailErr=="" && $ageErr=="" && $usernameErr=="" && $passwordErr=="")
		 {	
		 	$name=$_POST['sname'];
		 	$age = $_POST ["sage"]; 
		 	$email=$_POST['semail'];
		 	$uname=$_POST['suser']; 
		 	$password=$_POST['spass'];

		 	$qry="insert into register(name,age,email,uname,password) values('$name','$age','$email','$uname','$password')";
		 	mysqli_query($link,$qry);
	 }
	}

?>
<html>
<head>
<title>Registration page</title>
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
margin:10px;
width:600px;
text-align:center;
	
}
.error
{
	color: red;
}
</style>
</head>
<body>
<form action="" method="post">

<h1>Registration Page</h1>

<input type="text" placeholder="name" name="sname" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr; ?> </span></br>
<input type="text" placeholder="age" name="sage" value="<?php echo $age;?>"><span class="error">* <?php echo $ageErr; ?> </span></br>
<input type="text" placeholder="E-mail" name="semail" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr; ?> </span></br>
<input type="text" placeholder="username" name="suser" value="<?php echo $uname;?>"><span class="error">* <?php echo $usernameErr; ?> </span></br>
<input type="password" placeholder="password" name="spass" value="<?php echo $password;?>"><span class="error">* <?php echo $passwordErr; ?> </span></br>
<input type="submit" name="submit" value="submit"></br>
</form>

</body>
</html>
