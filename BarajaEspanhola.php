<?php
const src = "./barajaEspanhola/";

$deck = array();
for ($i = 0; $i < 40; $i++)
    $deck[] = $i;

$tableOrd = "<table border='1' cellpadding='10' cellspacing='2'>";
for ($j = 0; $j < 4; $j++)
{
    $tableOrd .= '<tr>';
    for ($i = 0; $i < 10; $i++)
        $tableOrd .= '<td><img src="' . src . $j * 10 + $i . '.png"></td>';
}
$tableOrd .= '</table>';

shuffle($deck);

$tableDesord = "<table border='1' cellpadding='10' cellspacing='2'>";
for ($j = 0; $j < 4; $j++)
{
    $tableDesord .= '<tr>';
    for ($i = 0; $i < 10; $i++)
        $tableDesord .= '<td><img src="' . src . $deck[$j * 10 + $i] . '.png"></td>';
}
$tableDesord .= '</table>';

echo "<h2>Tabla Ordenada:</h2>" . $tableOrd . "<h2>Tabla Desordenada:</h2>" . $tableDesord;








        //echo '<img src="' . src . $i * 10 + $j . '.png">';
