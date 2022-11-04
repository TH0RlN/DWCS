<?php
    $val = 0;
    $ref = 0;
    function byRefOrVal($val, &$ref)
    {
        $val++;
        $ref++;
        echo "val =", $val;
        echo '<br>';
        echo "ref =", $ref;
        echo '<br>';
        print "$val" . "$ref";

    }
    byRefOrVal($val, $ref);
    echo '<br>';
    
    echo "val =", $val;
    echo '<br>';
    echo "ref =", $ref;
    echo '<br>';
        
?>
