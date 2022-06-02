<!DOCTYPE html>
<html lang="en">
<head>
    <title>T3_TV_oef_2</title>
</head>
<body>

<?php
/**
 * Author:  Rob Wessels
 * Date:    Feb 2021
 * Subject: Testen en Verbeteren
 *          oefening 2
 */

// variabele declareren en initialiseren
$thisYear = 2012;

/**
 * function om schrikkeljaar mee te checken.
 * @param $year
 */
function CheckLeapYear($year)
{
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is een schrikkeljaar.";
    }
    else
    {
        echo "$year is GEEN schrikkeljaar.";
    }
}

// uitvoeren functie
CheckLeapYear($thisYear);

?>

</body>
</html>