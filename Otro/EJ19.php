<?php
    function limit(array $arr, int $limit)
    {
        $limited = array();
        foreach ($arr as $value)
            if ($value < $limit)
                $limited[]  = $value;
        return $limited;
    }
    
    $arr = array (5, 2, 3, 15, 8, 11, 10);
    
    foreach ($arr as $value)
            echo $value . "<br>";
    
    echo '<br><br><br>';
    
    foreach (limit($arr, 10) as $value)
        echo $value . "<br>";