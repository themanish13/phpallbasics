<?php
function fact($n){
    if($n == 0 || $n == 1)
        return 1;
    else
        return $n * fact($n - 1);
}

$a = fact(5);
echo "The factorial of 5 is $a";
?>
