<?php

function mayusculas(string &$str)
{
    $str = strtolower($str);
    $str = ucwords($str);
}

$array = array('juan', 'pedro', 'jose lUis', 'kORE pAUl wILfReD gOBa', '', '!!!!!!!!!');
array_walk($array, 'mayusculas');

$str = "";
foreach ($array as $name)
    $str .= $name . '<br>';

echo $str;