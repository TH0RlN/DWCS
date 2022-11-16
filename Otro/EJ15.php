<?php
    function isLower(string $str)
    {
        foreach (str_split($str) as $char)
                if (ord($char) >= 65 & ord($char) <= 90)
                    return false;
        return true;
    }
    
    var_dump(isLower("HOLA jaimito"));
