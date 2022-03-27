<?php
/*
     * Author: Kaine van Ommeren
     * Date: 22-03-2022
     * File: login.php
     */

    $users = array();
    $users["Kaine"] = "P@ssword"; // SHA256 voor Encryptie
    $users["Daan"] = "Jonko";
    $users["Evers"] = "@jax";
    $users["Hamilton"] = "Mercedes";


    // Is er een user gevonden?
    $userFound = false;

    // Checks op de userinput uitvoeren
    if (empty($_POST["txtUsername"]) == false && empty($_POST["txtPassword"]) == false)
    {
        // Bepalen of de gegeven Username & Password in de array staat.
        
        foreach ($users as $usr => $pwd)
        {
            // Per User moet ik controleren met de $_POST gevevens
            if ($_POST["txtUsername"] == $usr && $_POST["txtPassword"] == $pwd)
                // Gebruiker gevonden
                $userFound = true;
        }
    }
    else
    {
        echo "<p> U bent de Username of Password (of beide) vergeten. Ga terug</p>";
        echo "<a href=\"form.php\">Ga terug</a>";
    }
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
        <?php
            if ($userFound == true)
            {
                echo "<h1>Succesvol ingelogd</h1>";
                echo "<p>Ingelogd als " . $_POST["txtUsername"] . "</p>";
            }
            else
            {
                echo "<h1>Foutieve inlog</h1>";
                echo "<p>Probeer opnieuw</p>";
            }
        ?>
    </body>
</html>
