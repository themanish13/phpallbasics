<?php
// this is built in functiions and easier one.
$a="manish mainali";
echo"the reverse string is ".strrev($a);
?>

<?php
$a = "manish loves kunje";
$reversed = "";
$length = strlen($a);
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $a[$i];}
echo "The reverse string is " . $reversed;
?>