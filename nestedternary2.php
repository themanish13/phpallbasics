<?php
//find the biggest number among three. use ternary.
$x = 12;
$y = 7;
$z = 20;
$s= ($x>$y)?( $x > $z ? $x:$z):($y>$z ? $y : $z);
echo"the biggestt is $s";
?>