<?php
//swapping two vars using functions
function sum($a,$b){
    echo"before swap values are a has $a and b has $b\n";
    $c=$a;
    $a=$b;
    $b=$c;
    echo "The value of a is $a and b is $b\n";
}
sum(5,9);
?>