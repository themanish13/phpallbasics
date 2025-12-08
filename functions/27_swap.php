
<?php
//swapping two numbers
function swap($a, $b){
    echo "Before swap: a = $a, b = $b\n";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swap: a = $a, b = $b\n";
}
swap(5, 9);
?>
