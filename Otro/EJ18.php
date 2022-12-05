<?php
    function isPalindrome(string $str)
    {
        return (strrev($str) == $str ? true : false);
    }

echo isPalindrome("pézép") ? "true" : "false";