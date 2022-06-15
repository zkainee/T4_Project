<?php
/*
 * Author: Kaine van Ommeren
 * Date: 11-06-2022
 * file: overview.php
 */
?>
<?php
include("../functions/db_functions.php");

session_start();

// Query schrijven
// WHERE Username = '$username' AND Password = '$password'


?>
<!doctype html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/cards.css">
        <link rel="stylesheet" href="../styles/overview.css">
        <link rel="icon" href="../pictures/KW1C_Rood_Driehoek.png">
        <title>Cosmo Academy Events</title>
    </head>
    <body>
    <header>
        <nav class="ul-background">
            <a class="AHomepage" href="../index.php">Homepagina</a>
        </nav>
        <h2>
            Cosmo Academy Events
        </h2>
    </header>
    <main>
        <div class="cards">
            <div class="card card-1">
                <div class="card__icon"><i class="fas fa-bolt"></i></div>
                <p class="card__exit"><i class="fas fa-times"></i></p>
                <h2 class="card__title">
                    <?php
                    echo "<a href='add_form.php'>➕</a>";
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
                    ?>
                    <form>
                        <input type="text" name="search">
                         <input type="submit" value="Zoeken">
                    </form>
                    <br>
                    <?php
                try
                {

                    if (empty($_GET['search'])) {
                        $search = '';
                        $query = "SET NOCOUNT ON; USE [CosmoAcademy]; SELECT * FROM [Overview] ORDER BY [EventStart] ASC";
                    } else {
                        $search = $_GET["search"];
                        $query = "SET NOCOUNT ON; USE [CosmoAcademy]; SELECT * FROM [Overview] WHERE [EventName] LIKE '%$search%' OR [EventLocation] LIKE '%$search%' ORDER BY [EventStart] ASC";
                    }
                        executeQuery($query);
                        // Query uitvoeren
                        $result = $pdo->query($query);
                    }
                    catch (PDOException $e)
                    {
                        // Bij een error, toon dan deze melding
                        echo "Er is een probleem met ophalen van evenementen informatie: " . $e->getMessage();
                        // Stop het script
                        die();
                    }
                    ?>
                    <div id="tableOverview">
                    <?php
                    echo "<table border=\1\">";
                    echo "<tr>";
                    echo "<th>Edit</th>";
                    echo "<th>ID:</th>";
                    echo "<th>Evenement:</th>";
                    echo "<th>Evenement start:</th>";
                    echo "<th>Evenement einde:</th>";
                    echo "<th>Evenement locatie:</th>";
                    echo "<th>Delete</th>";
                    echo "</tr>";

                    // Door de results heen loopen via een while
                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        echo "<tr>";
                        echo "<td><a href='update_form.php?event=" . $row['EventID'] . "'>Edit</a></td>";
                        echo "<td>" . $row["EventID"] . "</td>";
                        echo "<td>" . $row["EventName"] . "</td>";
                        echo "<td>" . $row["EventStart"] . "</p>" . "</td>";
                        echo "<td>" . $row["EventEnd"] . "</td>";
                        echo "<td>" . $row["EventLocation"] . "</td>";
                        echo "<td><a href='delete_form.php?event=" . $row['EventID'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>
                    </div>
                </h2>
            </div>
    </main>
    <?php
    include ("../functions/footer.php");
    ?>
    </body>
</html>

