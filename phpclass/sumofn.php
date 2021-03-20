<html>
<body>
<h2>sum of n natural numbers using while loop</h2>
<?php
$n=5;
$i=1;
$s=0;
while($i<=$n)
{
	$s=$s+$i;
	$i++;
}
echo "sum of n natural number=$s</br>";
?>
<h2>sum of n natural numbers using do while loop </h2>
<?php
$n=5;
$i=1;
$s=0;
do
{
	$s=$s+$i;
	$i++;
}
while($i<=$n);
echo "sum of n natural number=$s</br>";
?>
<h2>multiplication table using for loop </h2>
<?php

$a=7;
for($i=1;$i<=10;$i++)
{
	$m= $a*$i;
	echo "$a*$i=$m <br>";
	
	
}?>
<h2>for each loop</h2>
<?php


$num = array(1,2,3,4,5);
foreach($num as $value)
{
	echo $value."&nbsp";
}
?>
<?php
$str="hello world";
$a=str_word_count($str);
echo $a;
?>
</body>
</html>