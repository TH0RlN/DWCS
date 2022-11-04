<?php
    function tempRand()
    {
        $temps;
        for ($i = 0; $i < 30; $i++)
            $temps[$i] = random_int(10, 28);
        return $temps;
    }
    
    function mean(array $arr)
    {
        $sum = 0;
        foreach ($arr as $value)
            $sum += $value;
        return ($sum / count($arr));
    }
    
    function topFive(array $arr)
    {
        $top = array();
        
        foreach ($arr as $value)
        {
            if (count($top) < 5)
                $top[count($top)] = $value;
            else
            {
               sort($top);
               if ($top[0] < $value)
                   $top[0] = $value;
            }
        }
        return $top;
    }
    
    function bottomFive(array $arr)
    {
        $bot = array();
        
        foreach ($arr as $value)
        {
            if (count($bot) < 5)
                $bot[count($bot)] = $value;
            else
            {
               rsort($bot);
               if ($bot[0] > $value)
                   $bot[0] = $value;
            }
        }
        return $bot;
    }

    $tempMonth = tempRand();
    
    echo "La temperatura media de este mes fue: " . number_format(mean($tempMonth), 2, "'", "") . "&degC<br>"
            . "Las mayores temperaturas fueron: ";
    foreach (topFive($tempMonth) as $value)
        echo $value . "&degC\t";
    echo "<br>Las menores temperaturas fueron: ";
    foreach (bottomFive($tempMonth) as $value)
        echo $value . "&degC\t";
    
        
    
    
    
    