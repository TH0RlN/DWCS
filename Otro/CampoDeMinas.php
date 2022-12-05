<?php

$map = array_fill(0, 20, array_fill(0, 20, '.'));
$numMinas = 0;


while ($numMinas < 10)
{
    for ($j = 0; $j < 20; $j++)
    {
        for ($i = 0; $i < 20; $i++)
        {
            if ($numMinas < 10 & $map[$j][$i] != '*' & rand(0, 400) < 10)
            {
                $map[$j][$i] = '*';
                $numMinas++;
            }
            elseif ($map[$j][$i] != '*')
                $map[$j][$i] = '.';
        }
    }
}
$str = "<table border='1' cellpadding='10' cellspacing='2'>";
foreach ($map as $line)
{
    $str .=  "<tr>";
    foreach ($line as $value)
        $str .= "<td>" . $value . "</td>";
    $str .= "</tr>";
}
echo $str . "</table>";


