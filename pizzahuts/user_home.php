<?php
session_start();
echo "<h1 style=color:white>HELLO ".$_SESSION["name"]."</h1>";
$id=$_SESSION["id"];
?>			
<!DOCTYPE html>
<html>
<head>
	
	<style>
		table,tr,td
		{
			text-align:center;
			padding: 20px;
			margin:10px;
			font-size: 20px;
		}
		fieldset
		{
			width:300px;
			height: 230px;
			margin-left: 480px;
			margin-top: 100%;
			font-size: 20px;
			background-color:rgba(0,0,0,0.3);
			color:white;
			
		}
		body
		{
			background-image:url("img/pizza2.jpeg");
			background-repeat:;
			background-attachment: cover;
			
			height:150px;
		}
	</style>
</head>
<body>
	<?php require('nav1.php'); ?>
	<div>
	<h1>WELCOME TO OUR PIZZA HUT</h1>
	</div>
</body>
</html>




  