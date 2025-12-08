<?php
$a = "this is just the beginnning of my rule";
$a = strtolower($a);
$count = 0;

for ($i = 0; $i < strlen($a); $i++) {
    if ($a[$i] == 'a' || $a[$i] == 'e' || $a[$i] == 'i' || $a[$i] == 'o' || $a[$i] == 'u') {
        $count++;
    }
}
echo "The number of vowels in the string \"$a\" is $count";
?>
