<?php
    $str = "Sin problema.";
    
    echo "Nº de caracteres: " . strlen($str) . "<br>";
    echo "Posición de problema: " . strpos($str, "problema") . "<br>";
    echo str_replace("problema", "problemas", $str) . "<br>";
    echo chr(65) . " " . chr(66) . " " . chr(67). "<br>";
    echo strtr($str, "n", "N") . "<br>";
    echo strtoupper($str) . " " . strtolower($str) . "<br>";
    echo trim("    Sin problema", " ") . "<br>";
    echo strrev($str) . "<br>";
    echo substr_count($str, 'o');
    
    
?>

