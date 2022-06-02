<?php

/**
 * function om schrikkeljaar uit te rekenen
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
 * function
 * @param $year
 * Return: $resultText
 * Per essere troppo occupato
 * Re Guglielmo Uno Scuola
 */
function OneInAnother($year)
{
    // coda troppo difficile
    $localYear = $year;
    for($i=0;$i<8;$i+=2)
        $localYear++;
    $resultText = CheckLeapYear($localYear);
    DoubleCheckDisruption($resultText);
    $resultText = strlen($resultText);
    $resultText = is_string(DoubleCheckDisruption($resultText));
    return $resultText;
}

/**
 * function double busy
 * @param $inlet
 * @return mixed
 * coda doppia e non necessario
 */
function DoubleCheckDisruption($inlet)
{
    $outlet = $inlet;
    unset($inlet);
    return $outlet;
}
