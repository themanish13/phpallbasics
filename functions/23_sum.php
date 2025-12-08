<?php
function sum(){
    //no parameters no return types
$a=5;
$b=10;
$sum = $a+$b;
echo"the sum is $sum";
}
sum();
?>

<?php
//using parameters and no return types
function sum1($c,$d){
    $sum1=$c+$d;
    echo"the sum is $sum1";
}
sum1(4,5);
?>

<?php
//using parameters and return types
function sum2($c,$d){
    $sum2=$c+$d;
    return $sum2;
}
echo"the sum is ".sum2(9,5);;
?>


<?php
//no parameters but returns value haha
function sum3(){
    $a=10;
    $b=100;
    $c=$a+$b;
    return $c;
}
echo"the sum is ".sum3();
?>
