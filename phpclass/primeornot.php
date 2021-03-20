<?php
$num=17;
$f=0;
$r=$num/2;
for($i=2;$i<=$r;$i++)
{
	if($num%$i==0)
	{
		echo"$num is not prime";
		$f=1;
		break;
	}
}
	if($f==0)
	{
		echo "$num is prime";
	}	
?>