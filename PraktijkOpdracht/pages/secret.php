<?php
/*
 * Author: Kaine van Ommeren
 * Date: 17-05-2022
 * File: secret.php
 */

//Session start
session_start();
include "../function/db_functions.php";

startConnection();
$sql = "SET NOCOUNT ON; USE Kuijpers; SELECT * FROM Medewerkers' ";
$resultaat = executeQuery($sql);

//Bepalen of er correct is ingelogd
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)
    {
        //Er is ingelogd, pagina start hier::
        ?>
    <!doctype html>
        <html lang="nl">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="../styles/index.css">
                <title>Kuijpers Overzichtspagina</title>
            </head>
            <body>
            <?php
            echo "<table>";
            echo "<tr>";
            echo "<th>Naam:</th>";
            echo "<th>Telefoonnummer:</th>";
            echo "<th>Emailadres:</th>";
            echo "<th>Werkzaamheden:</th>";
            echo "</tr>";
            // Door de results heen loopen via een while
            while ($row = $resultaat->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<td>". $row["naam"] . "</td>";
                echo "<td>". $row["telefoonnummer"] . "</td>";
                echo "<td>". $row["emailadres"] . "</td>";
                echo "<td>". $row["werkzaamheden"] . "</td>";
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table><br>";
            ?>
                <img src="../pictures/kuijpers.png" id="kuijpersBackground">
            </body>
        </html>
        <?php
    }
else
    {
        //Niet ingelogd
        header("Location: ../index.php");
        die();
    }
?>

