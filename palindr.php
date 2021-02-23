<?php
$num=151;
$rem=0;
$d=0;
$temp=$num;
while($num>1)
{
$rem=$num%10;
$d=($d*10)+$rem;
$num=$num/10;
}
if($temp==$d)
{
echo"the number is palindrome";
}
else
{
echo"the number is not palindrome";
}
?>
