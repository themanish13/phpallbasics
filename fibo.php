<?php
//fibonaccci 
$n=5; //let this be terms.
$a=0;
$b=1; 
echo"$a $b ";
for($i=3;$i<=$n;$i++){
    $c=$a+$b;
    echo"$c ";
    $a=$b;
    $b=$c;
}
?>