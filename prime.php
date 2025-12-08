<?php
//check if prime or not 
$a=22;
$t=$a;
$count=0;
for($i=1;$i<=$t;$i++){
    if($t%2==0){
        $count ++;
    }
}
if($count==0){
    echo"the number $a is prime.";
}
else{
    echo"the number $a is not prime.";
}
?>