<?php
    const strResDNI = "TRWAGMYFPDXBNJZSQVHLCKE";
    
    function checkDniChar(int $num, string $char)
    {
        $res = $num % 23;
        
        if (substr(strResDNI, $res, 1) == $char)
            return true;
        else
            return false;
    }

    function checkDni(string $dni)
    {
        if (strlen($dni) != 9)
            return (-1);
        if (! is_numeric(substr($dni, 0, 8)))
            return (-2);
        if (! checkDniChar(intval(substr($dni, 0, 8)), substr($dni, -1)))
            return (-3);
        return 0;
    }
    
    echo checkDni("39455826Q");
