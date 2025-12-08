<?php
$arr = [3,4,5,6,7,8,9,10];
$sum = array_sum($arr);    
$average = $sum / count($arr);
echo "The sum is: " . $sum . "\n";
echo "The average is: " . $average;
?>



<?php
//using the most basics way
$a= [3,4,5,6,7,8,9,10];
$sum=0;
$count=0;
for($i=0;$i<count($a);$i++){
    $sum+=$a[$i];
    $count++;
}
$avg=$sum/$count;
echo "The sum is: " . $sum . "\n";
echo "The average is: " . $avg;
?>