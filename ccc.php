<?php

$n=153;
$sum=0;
$r=0;
while($n>0)
{
	$r= $n%10;
	$sum= $sum+$r;
	$n=$n/10;
}     
echo("sum of digit is																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					 $sum");
?>