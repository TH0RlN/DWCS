<?php
    function divisores(int $n)
    {
        $div = array();
        for ($i = (int)$n/2; $i > 0; $i--)
            if ($n % $i == 0)
                $div[] = $i;
            
        return $div;
    }

    function mcd(int $n1, int $n2)
    {
        $div1 = divisores($n1);
        $div2 = divisores($n2);
        
        rsort($div1);
        rsort($div2);
        
        foreach ($div1 as $d1)
            foreach ($div2 as $d2)
                if ($d1 == $d2)
                    return $d1;
    }
    
    $x = 20;
    $y = 3550;
    
    echo "MCD($x, $y) = " . mcd($x, $y);

