<?php
/*
 * Author: Kaine van ommeren
 * Date: 28-04-2022
 * file: T4_REA_Oefening1_1.php
 */
// Open de database connectie en ODBC driver
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
        <script src="scripts/script.js" defer></script>
    </head>
    <body>
    <?php
    include"../../../includes/header.php";
    echo $header;
    ?>
    <main id="wrapper">
        <?php
        include"../../../includes/navigation.php";
        echo $navigation;
        ?>
        <section>
            <h2>
                Uitwerking oefening 6.3
            </h2>
            <hr>
            <?php
            try
            {
                $pdo = new PDO("odbc:odbc2sqlserver");
            }
            catch (PDOException $e)
            {
                // Bij een error, toon dan deze melding
                echo "<h1>Database error:</h1>";
                echo $e->getMessage();
                // Stop het script
                die();
            }
            echo "database connectie gelukt<br>";
            // Uitvoeren van een SQl query
            try
            {
                // Query schrijven
                $sql = "SELECT * FROM tblRiddles";
                // Query uitvoeren
                $result = $pdo->query($sql);
            }
            catch (PDOException $e)
            {
                // Bij een error, toon dan deze melding
                echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();
                // Stop het script
                die();
            }
            echo "<p>Klik op het lege vakje om het antwoord te zien.</p>";
            echo "<table border=\1\">";
            echo "<tr>";
            echo "<th>ID:</th>";
            echo "<th>Raadsel:</th>";
            echo "<th>Oplossing:</th>";
            echo "<th>Bedenker:</th>";
            echo "<th>Datum:</th>";
            echo "</tr>";

            // Door de results heen loopen via een while
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<td>" . $row["Id"] . "</td>";
                echo "<td>" . $row["RiddleText"] . "</td>";
                echo "<td>" . "<p style='filter: blur(100px)' onclick='showAnswer(this)'>" . $row["RiddleAnswer"] . "</p>" . "</td>";
                echo "<td>" . $row["Creator"] . "</td>";
                echo "<td>" . $row["CreateDate"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </section>
    </main>
    <?php
    include"../../../includes/footer.php";
    ?>
</body>

