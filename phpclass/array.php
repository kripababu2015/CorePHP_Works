<html>
<body>
<h2>Arrays</h2>
<h4>indexed Array</h4>
<?php
$cars=array("volvo","BMW","Toyoto");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
echo "I like $cars[0], $cars[1] and $cars[2].<br>";



?>
<h4>Associative Array</h4>
<?php
$data=array("name"=>"kripa","age"=>23);
echo "Her name is ".$data["name"]." and she has  ".$data["age"]." years old.";

?>
<h4>Foreach loop using Array</h4>
<?php
$car=[1,2,3,4,5,6,7,8,9,10];
print_r($car[0]);
echo"<br>";
print_r($car);
echo"<br>";
foreach($car as $value)
{
	echo" ";
	echo $value."<br>";
}
echo "<h4>Foreach loop using Multi dimensional Array</h4>";
$s=[[1,2,3,4],[1,2,3],[5,6]];
print_r($s[2]);
echo"<br>";
print_r($s[0][0]);	
echo"<br>";
print_r($s[2][0]);
foreach($s as $x)
{   echo "<br>";
	print_r( $x);
}
?>
</body>
</html>