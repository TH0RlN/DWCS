<?php

$array = array("color" => "red", 2, 4);
reset($array);
$array[] = "hola";

foreach ($array as $value)
    echo $value . "<br>";

var_dump($array);