<?php
//use third variables
$a=5;
$b=10;
echo"the org a=$a and b=$b\n";
$c=$a;
$a=$b;
$b=$c;
echo"the swapped results ie a=$a and b=$b \n";
?>


<?php
// dont use third variables
$a=5;
$b=10;
echo"the org a=$a and b=$b\n";
$a=$a+$b;    //15
$b=$a-$b;    //5
$a=$a-$b;    //10


echo"the swapped results ie a=$a and b=$b \n";
?>