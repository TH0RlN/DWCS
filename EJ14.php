<?php
    function reverser(string $str)
    {
        if (strlen($str) == 1)
            return $str;
        else
            return reverser(substr($str, 1, strlen($str) - 1)) . substr($str, 0, 1);
    }
    echo reverser("Dabale arroz a la zorra el abad");


