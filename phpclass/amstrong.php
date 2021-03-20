<?php
$a=3;
$s=0;
$n=$a;
while($a>0)
{
$r=$a%10;
$s=$s+($r*$r*$r);
$a=$a/10;
}
if($s==$n)
{
	echo "$n is amstrong number";
}
else
{
	echo"$n is not amstrong";

}
?>