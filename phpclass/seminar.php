<h3> gettype()</h3>
<?php
$a="hello";
echo gettype($a);
?>
<h3> Empty()</h3>
<?php
$a=1;
if(empty($a))
{
	echo"it is empty";
}
else
{
	echo"$a is not empty";
}
?>
<h3> range()</h3>
<?php
$n=range(0,5);
print_r($n);
?>
<h3> array_reverse()</h3>
<?php
$a=array(1,2,3,4);
$s=array_reverse($a);
print_r ($s);
?>
<h3> array_unique()</h3>
<?php
$a=array(1,2,3,4,1,2);
$s=array_unique($a);
print_r ($s);
?>
<h3> array_replace()</h3>
<?php
$a=array(1,2,3,4);
$b=array(5,6,7,8);
$s=array_replace($a,$b);
print_r ($s);
?>
<h3>chunk_split()</h3>
<?php
$str="hello world";
echo chunk_split(
?>