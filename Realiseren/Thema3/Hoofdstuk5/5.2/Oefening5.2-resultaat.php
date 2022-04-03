<?php
/*
     * Author: Kaine van Ommeren
     * Date: 27-03-2022
     * File: Oefening5.2-resulataat.php
     */

$users = array();
$users["Kaine"] = "P@ssword"; // SHA256 voor Encryptie

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
    echo "<a href=\"Oefening5_2.php\">Ga terug</a>";
}
?>
<html lang="nl">
    <head>
        <title>
            <?php
            echo 'Realiseren instructies thema 3 en 4.';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
    include"../../includes/header.php";
    echo $header;
    ?>
    <main id="wrapper">
        <?php
        include"../../includes/navigation.php";
        echo $navigation;
        ?>
        <section>
            <h2>
                Uitwerking oefening 5.2
            </h2>
            <?php
            if ($userFound == true)
            {
                echo "<h1>Succesvol ingelogd</h1>";
                echo "<p>Ingelogd als " . $_POST["txtUsername"] . "</p>";
                echo "<figure>
                        <img src='schatkist.png' alt='Schatkist'>
                        <figcaption>
                            Gefeliciteerd, je hebt de schatkist gevonden!
                        </figcaption>
                     </figure>";
            }
            else
            {
                echo "<h1>Foutieve inlog</h1>";
                echo "<p>Probeer opnieuw</p>";
            }
            ?>
        </section>
    </main>
    <?php
    include"../../includes/footer.php";
    ?>
    </body>
</html>


