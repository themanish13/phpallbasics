<?php
// pass an array to a function and return the sum of its elements.
// Hint: Loop through array inside function.
function arrSum($arr){
    $sum=0;
    for($i=0;$i<count($arr);$i++){
        $sum+=$arr[$i];
    }
    return $sum;
}
$c=[4,3,2,1];
echo"the sum is ".arrSum($c);
?>