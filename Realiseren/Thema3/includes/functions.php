<?php
/**
 * User: Kaine van Ommeren
 * Date: 13-03-2022
 * File: functions.php
 */

$name = "Kaine van Ommeren";
$class = "IOS1SAV";
$date = date("d-m-y");

// Oefening 4.1 - Taak 1

function CheckTrafficLight($ambulance, $color)
{
    if ($ambulance == false)
    {
        if ($color == "Rood" || $color == "Oranje")
        {
            echo "<p> Je bent genoodzaakt om te stoppen! </p>";
        }
        else
        {
            echo "<p> Je mag nu verder doorrijden </p>";
        }
    }
    else
    {
        echo "<p> Een ambulance komt eraan! Stop uw voertuig of wijk uit! </p>";
    }
}

// Oefening 4.2 - Taak 2

function ShowMenu($day)
{
    switch ($day)
    {
        case "Mon":
            echo "Vandaag is onze groete soep de gerecht van de dag.";
            break;
        case "Tue":
            echo "Vandaag is onze T-Bone steak het gerecht van de dag.";
            break;
        case "Wed":
            echo "Vandaag is onze Carpaccio het gerecht van de dag.";
            break;
        case "Thu":
            echo "Vandaag is onze Creme Brulee het gerecht van de dag.";
            break;
        case "Fri":
            echo "Vandaag is onze Pasta Carbonada het gerecht van de dag.";
            break;
        case "Sat":
            echo "Vandaag is onze Geitenkaas Salade het gerecht van de dag.";
            break;
        case "Sun":
            echo "Vandaag is onze Kaasplankje het gerecht van de dag.";
            break;
        default:
            echo "Er is vandaag helaas geen gerecht van de dag.";
    }
}

function CheckLadiesNight($age, $gen)
{
    if ($age >= 70 || $age >= 18 && $gen == "Vrouw")
    {
        echo "<p> Uw geslacht is: " . $gen . "</p>";
        echo "<p> Uw leeftijd is: " . $age . "</p>";
        echo "<p> We heten u van harte welkom met GRATIS entree! </p>";
    }
    else
    {
        echo "<p> Uw geslacht is: " . $gen . "</p>";
        echo "<p> Uw leeftijd is: " . $age . "</p>";
        echo "<p> U schikt niet over de aangegeven data, u mag daarom niet naar binnen. </p>";
    }
}
?>

