<?php

	$gerr = $suberr = $herr = "" ;
	$name = $email = $age= $password="";  
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	
	{
		if(empty($_POST['gender']))
		{
			$gerr="gender is required <br>";
		}
		else
		{

		}
		if(empty($_POST['subject']))
		{
			$suberr="subject is required <br>";
		}

		if(empty($_POST['hobbie']))
		{
			$herr="hobbie is required <br>";
		}
		$link=mysqli_connect("localhost","root","","colleges");
		$age=$_POST['gender'];
		$sub=$_POST['subject'];
		$hobbie=$_POST['hobbie'];
		$sql="insert into valid(gender,subject,hobbies) values($age,$sub,$hobbie)";
		mysqli_query($link,$sql);
	}
?>


<html>
<body>
<form action="" method="post">
	<table>
		<tr><td>Gender</td><td><input type="radio" name="gender" id="m" value="Male"><label for="m">Male</label>
		</td>
		<td><input type="radio" name="gender" id="f" value="Female"><label for="f">Female</label></td> </tr><tr></td><?php echo $gerr; ?><td></tr>
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
				<tr><td></td><td><input type="submit" name="submit"></td></tr>

	</table>
</body>
</html>