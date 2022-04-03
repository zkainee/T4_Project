<!DOCTYPE html>
<html lang="en">
    <head>
        <title>T3_TV_oef_1</title>
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
    $year = 2014;

    /**
     * Een schrikkeljaar is niet deelbaar door 100 maar wel door 4 en door 400
     * Zie ook:  https://nl.wikipedia.org/wiki/Schrikkeljaar
     */
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is een schrikkeljaar.";
    }
    else
    {
        echo "$year is geen schrikkeljaar.";
    }

    ?>

    </body>
</html>