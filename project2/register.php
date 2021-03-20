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
		
			<h1>Registration Form</h1>
			<form action="insert.php" method="post">
				<tr><td> First Name:</td><td><input type="text" name="fname"></td></tr>
                <tr><td> Last Name:</td><td><input type="text" name="lname"></td></tr>
				<tr><td>E-mail:</td><td><input type="email" name="email"></td></tr>
				<tr><td></td><td><input type="submit" name="submit" value="ok"></td></tr>
		
			</form>
	
	</table>
	</fieldset>
<table border='1'>
<thead>
<tr>
<th>SlNo</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email id</th>

<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
    <?php 
	require('connect.php');
$res="select * from staff";
$result=mysqli_query($link,$res);
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['fname']."</td>
    <td>".$row['lname']."</td>
    <td>".$row['email']."</td>
    <td><a href='view.php?id=".$row['id']."'>View</a></td>
    <td><a href='edit.php?id=".$row['id']."'>Edit</a></td>
    <td><a href='delete.php?id=".$row['id']."''>Delete</a></td>
    </tr>";
}
 
 ?> 
		
</body>
</html>