<?php
    $num = 3.14;
    
    if (is_float($num))
        echo gettype($num) . " ==> " . $num . "<br>";
    else
        echo "No es float<br>"
?>
