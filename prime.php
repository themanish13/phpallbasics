<?php
//check if prime or not 
$a=9;
$t=$a;
if($a<=0){
    echo"$a is not prime number";
    exit;
}
$count=0;
for($i=1;$i<=$t;$i++){
    if($t%$i==0){
        $count ++;
        break; // no need to continue if divisible
    }
}
if($count==2){
    echo"the number $a is prime.";
}
else{
    echo"the number $a is not prime.";
}
?>