<html>
<head>
<title>for loop</title>
</head>
<body>
<h1>looping statements</h1>
<h2>for loop</h2>
<?php 
	for($a=1;$a<=10;$a++)
	{
		echo "$a<br>";	
	}
?>
<h2>While loop</h2>
<?php 
	$b=1;
	while($b<=10)
	{
		echo "$b<br>";
		
		$b++;
	}
?>
<h2> Do While loop</h2>
<?php 
	$b=1;
	do
	{
		echo "$b<br>";
		
		$b++;
	}
	while($b<=10)
?>
<h2> for each loop</h2>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

</body>
</html>