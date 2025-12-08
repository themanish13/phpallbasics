<?php
function sortArr($a){
    for($i=0;$i<count($a);$i++)  // when there is 5
        for($j=$i+1;$j<count($a);$j++)    //inner loop starts from 2 -6 and compares after wards
            if($a[$i] > $a[$j]){
                $t = $a[$i];  //if 5 is greater than 2,9,1,6 stores in temp
                $a[$i] = $a[$j];  //arranges with this methods
                $a[$j] = $t;
            }
    return $a;
}

$n = [5,2,9,1,6];
$s = sortArr($n);
echo implode(", ", $s);
?>
