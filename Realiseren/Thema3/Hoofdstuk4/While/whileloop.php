<?php

    $wallet = 0;
    $weather = "Zonnig";

    while ($weather == "Zonnig")
    {
        //Oppakken van de 10 euro
        $wallet += 10;

        //Gebruikersinteractie
        echo "<p>Geld opgepakt! Nieuwe inhoud portomonee: " . $wallet . "</p>";

        // Percentage berekenen van een regendag
        $percentageCount = rand(1,100);
        if ($percentageCount <= 34)
        {
            $weather = "Regen";
        }

    }

?>
