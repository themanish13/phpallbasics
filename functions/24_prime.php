<?php
//functions to check prime or not
function prime($n){
    $count=0;
    if($n<=1){
        echo"cant be prime";
        exit;
    }
    for($i=2;$i<$n;$i++){
        if($n%$i==0){
        $count++;
        break;
    }
    }
    if($count==0){
        echo"the $n is prime";
    }
    else{
        echo"the $n is not prime haha";
    }


}
prime(11);
?>