<?php

// finding power of a n number, can be any power
function power($x,$n){
    if($n == 0){
        return 1;
    }    
    else{
        $result=1;
        for($i=1;$i<=$n;$i++)
            $result*=$x;
    }
    return $result;
        
}
$x = 5;
$n = 2;
$a = power($x,$n);
echo "The power of $x as $n results to  $a";
?>
