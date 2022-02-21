<?php

$sum1 = 21 + 34;
$substract1 = 34 - 21;
$multiply1 = 21 * 34;
$devision = 34 / 21;
$power1 = 4 ** 4;
$modulo1 = 18 % 5;
$modulo2 = 34 % 4;

$string1 = "Mijn vader zei altijd: \"Eerst denken, dan doen!\" ";
$string2 = "<a href= \https://www.nu.nl\">Klik mij</a>";

echo $string1;

$int1 = 34;
$double1 = 5.5;
$boolean1 = true;
$array1 = [
    "Melk",
    "Brood",
    "Yoghurt",
    "Fanta",
    "Hertog Jan",
    "Jack Daniels",
    "Optimel",
    "Appels",
    "Croisant"];

echo count($array1);

echo $array1[4];

echo "<ol>";
    $listAmount = count($array1);
    $index = 0;
    while ($index < $listAmount)
    {
        echo "<li>" . $array1[$index] . "</li>";
        $index++;
    }
echo "</ol>";
