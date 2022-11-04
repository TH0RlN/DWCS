<?php
    function reverser(string $str)
    {
        if (mb_strlen($str) == 1)
            return $str;
        else
            return reverser(mb_substr($str, 1, mb_strlen($str) - 1)) . mb_substr($str, 0, 1);
    }
    echo reverser("raúl");


