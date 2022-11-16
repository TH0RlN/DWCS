<?php
echo "El promedio de los números introducidos es: " . (function()
{
    $sum = 0;
    $count = 0;
    $nums = func_get_args();
    foreach ($nums as $n)
    {
        $sum += $n;
        $count++;
    }
    
    return $sum / $count;
})(8, 10);
