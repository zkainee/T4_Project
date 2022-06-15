<!--
    Author: Kaine van Ommeren
    Date: 07-06-2022
    file: index.php
-->
<?php
    include "./functions/db_functions.php";
    startConnection();
?>
<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./styles/style.css">
        <link rel="stylesheet" href="./styles/cards.css">
        <link rel="stylesheet" href="./styles/overview.css">
        <link rel="icon" href="./pictures/KW1C_Rood_Driehoek.png">
        <title>Cosmo Academy Events</title>
    </head>
    <body>
        <header>
            <?php
            include("./functions/navigation.php");
            ?>
            <h2>
                Cosmo Academy Events
            </h2>
        </header>
        <main>
            <?php
            $query = "SELECT TOP 3 * FROM [Overview] ORDER BY [EventStart]";
            $result = executeQuery($query);
            ?>
            <div class="cards">
                <div class="card card-1">
                    <div class="card__icon"><i class="fas fa-bolt"></i></div>
                    <p class="card__exit"><i class="fas fa-times"></i></p>
                    <h2 class="card__title">
                        <p class="white">
                            Welkom op de Cosmo Academy Events pagina. <br>
                            Hieronder staan de aankomende evenementen aangegeven.
                        </p>
                        <br>
                        <div id="tableOverview">
                            <?php
                            echo "<table border=\1\">";
                            echo "<tr>";
                            echo "<th>ID:</th>";
                            echo "<th>Evenement:</th>";
                            echo "<th>Evenement start:</th>";
                            echo "<th>Evenement einde:</th>";
                            echo "<th>Evenement locatie:</th>";
                            echo "</tr>";

                            // Door de results heen loopen via een while
                            while ($row = $result->fetch(PDO::FETCH_ASSOC))
                            {
                                echo "<tr>";
                                echo "<td>" . $row["EventID"] . "</td>";
                                echo "<td>" . $row["EventName"] . "</td>";
                                echo "<td>" . $row["EventStart"] . "</p>" . "</td>";
                                echo "<td>" . $row["EventEnd"] . "</td>";
                                echo "<td>" . $row["EventLocation"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                        </div>
                    </h2>
                </div>
<!--                <div class="card card-2">-->
<!--                    <div class="card__icon"><i class="fas fa-bolt"></i></div>-->
<!--                    <p class="card__exit"><i class="fas fa-times"></i></p>-->
<!--                    <h2 class="card__title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>-->
<!--                </div>-->
<!--                <div class="card card-3">-->
<!--                    <div class="card__icon"><i class="fas fa-bolt"></i></div>-->
<!--                    <p class="card__exit"><i class="fas fa-times"></i></p>-->
<!--                    <h2 class="card__title">Ut enim ad minim veniam.</h2>-->
<!--                </div>-->
<!--                <div class="card card-4">-->
<!--                    <div class="card__icon"><i class="fas fa-bolt"></i></div>-->
<!--                    <p class="card__exit"><i class="fas fa-times"></i></p>-->
<!--                    <h2 class="card__title">Quis nostrud exercitation ullamco laboris nisi.</h2>-->
                </div>
        </main>
        <?php
        include ("./functions/footer.php");
        ?>
    </body>
</html>
