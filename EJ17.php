<?php

//(-b2 +- root(4ac))/2a  || ax2 + bx + c = 0

function solveX2(int $a, int $b, int $c)
{
    if ($a == 0 & $b == 0)
        return false;
    if ($a == 0 & $b != 0)
        return array((-$c)/$b);
    if ((pow($b, 2) - (4 * $a * $c)) < 0)
        return false;
    
    $sol1 = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / 2 * $a;
    $sol2 = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / 2 * $a;
    
    if ($sol1 == $sol2)
        return $sol1;
    else
        return array($sol1, $sol2);
}

$a = 4;
$b = 4;
$c = 1;

$sol = solveX2($a, $b, $c);
if ($sol == false)
    echo "La ecuación no tiene soluciones";
else if (gettype($sol) == "double")
    echo "La ecuación: $a x<super>2</super> + $b x + c tiene la solución: $sol";
else
    echo "La ecuación: $a x<super>2</super> + $b x + c tiene las soluciones: $sol[0] y $sol[1]";
        