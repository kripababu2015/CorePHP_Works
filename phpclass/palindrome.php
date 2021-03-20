<?php
$a=121;
$s=0;
$t=$a;
while($t>1)
{
	$r=$t%10;
	$s=($s*10)+$r;
	$t=$t/10;
}
if($a==$s)
{
	print "palindrome";
}
else
{
	print "not palindrome";
}

