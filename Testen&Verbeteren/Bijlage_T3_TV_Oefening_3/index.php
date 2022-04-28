
<!DOCTYPE html>
<html lang="en">
<head>
    <title>T3_TV_oef_3</title>
</head>
<body>

<?php
/**
 * Author:  Rob Wessels
 * Date:    Feb 2021
 * Subject: Testen en Verbeteren
 *          oefening 3
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
        $returnstring =  "$year is een schrikkeljaar.";
    }
    else
    {
        $returnstring = "$year is GEEN schrikkeljaar.";
    }
    return $returnstring;
}

/**
 * functie om de vorige functie in te gebruiken
 * @param $year
 * Return: $resultText
 */
function OneInAnother($year)
{
    $year++;
    $localYear = $year;
    $resultText = CheckLeapYear($localYear);
    return $resultText;
}

// uitvoeren functies
CheckLeapYear($thisYear);
echo "</br><hr>";
echo OneInAnother($thisYear);

?>

</body>
</html>