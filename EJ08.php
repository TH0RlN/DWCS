<?php
    $anho = 2008;
    
    if ($anho % 400 == 0 | ($anho % 4 == 0 & $anho % 100 != 0))
        echo "Es bisiesto";
    else
        echo "No es bisiesto";
