<html>
<body>
<?php
echo"<h4>var_dump</h4>";
$n=[11,22,33,44,"kripa"];
var_dump($n);
print_r($n);
echo"<br>";
echo"<h4> array push in indexed array</h4>";
echo"<br>";
array_push($n,66,"kripa");
print_r($n);
echo"<br>";

//Associative Array

echo "<h2> Array push</h2>";
echo"<h4> array push in Associative array</h4><br>";
$data=array("name"=>"kripa","age"=>23);
//way 1 usin array push method
array_push($data,'lastname','babu');
print_r($data);
echo "<br>";

//way 2 direct value insertion
$data['title']="hello";
print_r($data);
echo"<br>";

//way 3 using function
function array_push_assoc($data, $key, $value)
{
$data[$key] = $value;
print_r($data);

}
$data = array_push_assoc($data, 'h', '12344');



echo"<h4> array push in Multidimensional array</h4><br>";
$s=[[1,2,3,4],[1,2,3],[5,6]];
echo "<br>";
array_push($s,["bike","car","lorry"]);
print_r($s);

//unset array

//indexed array
echo "<h2> Array delete(unset)</h2>";
echo"<h4> array unset in indexed array</h4><br>";
$a=[1,2,3,"hi","hello",4,5];
echo"<h4> our array is</h4><br>";
print_r($a);
echo"<br>";
unset($a[2]);
print_r($a);


//unset associative array
echo"<h4> <br>array unset in Associative array</h4><br>";
$data=array("name"=>"kripa","age"=>23);
unset($data["name"]);
print_r($data);

echo"<h4> array unset in Multidimensional array</h4><br>";
$s=[[1,2,3,4],[1,2,3],[5,6]];
unset($s[1][2]);
print_r($s);
?>
</body>
</html>