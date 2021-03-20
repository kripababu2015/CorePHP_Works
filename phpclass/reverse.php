<?php
	$a=56789;
	$s=0;
	$n=$a;
	while($a>1)
	{
		$r=$a%10;
		$s=($s*10)+$r;
		$a=$a/10;
	}
	echo "reverse of  $s";
?>