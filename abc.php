<?php
/*$a=5;
$b=5;
$sum= $a+$b;
echo "sum of $a and $b is", $sum;*/
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
echo("sum of digits is &sum");
?>