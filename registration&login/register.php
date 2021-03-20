<?php

	$nameErr = $emailErr =  $ageErr=	$passwordErr="";  
	$name = $email = $age= $password="";  
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
		if (emptyempty($_POST["sage"]))
		 {  
            $ageErr = "age is required";  
    	} 
		else
		 {  
            $age=$_POST['sage'];  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $age) )
			 {  
            $ageErr = "Only numeric value is allowed.";  
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
			// else{
			// 	$emailErr= $_POST['email'];
			// }

		}
		if(empty($_POST['suser']))
		{
			$nameErr= "name is required";
	
		}
		else
		{
			$name=$_POST['suser'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
			
				$nameErr=" only letters and spaces allowed<br>";
			
			}
			
		}
		if(!empty($_POST["spass"]))
		 {
			$password = test_input($_POST["spass"]);
		if (strlen($_POST["spass"]) <= 8) 
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
	
        if($nameErr=="" && $emailErr=="" $ageErr=="" && $passwordErr=="")
		{	$name=$_POST[sname];
            $email=$_POST[semail];
			$age=$_POST[sage];
			$user=$_POST[suser];
            $password=$_POST[spass];
			$qry="insert into demo(name,email) values('$name',$email')";
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
</style>
</head>
<body>
<form action="" method="post">
<h1>Registration Page</h1>
<input type="text" placeholder="name" name="sname"></br>
<input type="text" placeholder="age" name="sage"></br>
<input type="email" placeholder="E-mail" name="semail"></br>
<input type="text" placeholder="username" name="suser"></br>
<input type="password" placeholder="password" name="spass"></br>
<input type="submit" name="submit" value="submit"></br>
</form>
<?php

?>
</body>
</html>