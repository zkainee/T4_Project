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

// Oefening 4.2 - Taak 3

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

// Oefening 4.3 - Taak 1

function GetUnixTime()
{
    $pastTime = Time();
    echo("Het is nu ". $pastTime . " seconden na 1 Janurari 1970. " . "<br>");
}

// Oefening 4.3 - Taak 2

function CalculateInterest($priceCar, $savedMoney)
{
    echo ("Een leuk tweedehands autootje kost " . $priceCar . " euro. Ik heb " . $savedMoney . " euro gespaard. " . "<br>"
    . "Ik zet het geld op de bank en krijg daarop een waanzinnige rente van 6% per maand." . "<br>"
    . "Ik ga met een while-loop uitrekenen hoeveel maanden ik moet wachten om de " . $priceCar . " te kunnen betalen.");

    $counter = 0;
    while ($savedMoney <= $priceCar)
    {
        $counter++;
        $savedMoney *= 1.06;
        $formatSavedMoney = number_format($savedMoney, 2);
        echo ("<br>" . "Op maand nr. " . $counter . " heb ik gespaard: " . $formatSavedMoney . " euro ");
    }

}
function CreatePiramid($i)
{
    $increase = true;
    while ($i >= 1)
    {
        // i tekenen
        for ($count = 1; $count <= $i; $count++)
        {
            echo $count;
        }
        echo "<br>";

        if ($increase == true)
        {
            $i++;

        }
        else
        {
            $i--;
        }
        //Omslag punt = 9
        if ($i == 9)
        {
            $increase = false;
        }
    }
}
?>

