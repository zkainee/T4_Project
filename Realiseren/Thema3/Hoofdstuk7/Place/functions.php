<?php

//hex color return
function getPixelColorFromNumber($number)
{
    $filename = getcwd() . "/pixels.data";
    $lines = file($filename, FILE_IGNORE_NEW_LINES);

    //Haal de specifieke kleur van deze pixel op
    $color = $lines[$number];

    //Geef de kleur via return
    return $color;
}
