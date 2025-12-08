
<?php
//checking rev and orginal are same or not thats what palindrome does
function pal($a){
    echo "original:$a \n";
    $rev=strrev($a);
    if($rev==$a){
        echo"$a is palindrome";
    }
    else{
       echo "$a is not palindrome";  
    }
   
}
pal("madam");
?>
