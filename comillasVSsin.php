<?php
    $ar1 = array("pos1", "pos2", "pos3");
    $ar1[10] = "La 10";
    $ar1[] = "La 11";
    $ar1[7] = "La 7";
    
    $ar2 = array("pos1" => "A", "pos2" => "B", "pos3" => "C");
    
    echo $ar1["2"]."<br>".$ar1[2]."<br>";
    echo $ar2[$ar1["2"]]."<br>".$ar2[$ar1[2]]."<br>";
    
    /*echo "<br>";
    
    foreach ($ar2 as $value)
        echo $value."<br>";*/
    
    echo "<br>";
    
    foreach ($ar1 as $value)
        echo $value.'<br>';
    
?>