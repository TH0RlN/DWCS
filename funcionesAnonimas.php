<?php
$num = 2;
$doble = function(float &$num)
{
    $num *= 2;
    return $num;
};

$triple = function() use(&$num)
{
    $num = pow($num, 3);
    return $num;
};

echo "Número original: " . $num . '<br>';
echo "Tras aplicar la clausura doble: "  . $doble($num) . '<br>';
echo "El número tras aplicar la función anónima doble es: " . $num . '<br>';
echo "Tras aplicar la clausura triple: " . $triple();