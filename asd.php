<?php
$a=5;
$b=4;
echo "before swap a=$a,b=$b";
$a=$a-$b;
$b=$a+$b;
$a=$b-$a;
echo "after swap a=$a,b=$b";
?>
