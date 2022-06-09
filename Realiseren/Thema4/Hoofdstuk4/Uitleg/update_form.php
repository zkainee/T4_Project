<?php
/*
 * Author: Kaine van ommeren
 * Date: 28-04-2022
 * file: T4_REA_Oefening1_1.php
 */
// Open de database connectie en ODBC driver

    include("../../includes/db_functions.php");
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
            Uitwerking oefening 6.3
        </h2>
        <hr>
        <?php
            // Bepalen of er werkelijk een geldig $_GET[riddleId] is meegestuurd
            if (empty($_GET['riddleId']) == true)
            {
                echo "<p class='error'> ERROR: Geen geldig riddleId opgegeven. </p>";
                //Stop met uitvoeren van script
                die();
            }
            // Uitlezen van de GET en in een makkelijker typbaar variable op te slaan.
            $riddleId = $_GET['riddleId'];

            // Bouw de SELECT query
            $query = "SELECT * FROM tblRiddles WHERE Id = " . $riddleId;
            echo $query;

            // Maak connectie met database
            startConnection();

            // Uitvoeren eerder gemaakt SQL-query
            $result = executeQuery($query);

            // Record uitlezen in een variable.
            $jokeVar = $result->fetch(PDO::FETCH_ASSOC);

//            $jokeText = "SELECT * FROM tblRiddles WHERE RiddleText = ";
//            $jokeAnswer = "SELECT * FROM tblRiddles WHERE RiddleAnswer = ";
//            $jokeDate = "SELECT * FROM tblRiddles WHERE CreateDate = ";
        ?>
        <p>
            Updaten van de grap: <? echo $jokeVar["Id"] ?></p>
        </p>
        <form action="update-query.php" method="post">
            <input type="hidden" name="hidRiddleId" value="<?php echo $jokeVar["Id"] ?>">
            <label>Grap tekst:</label>
            <label>
                <input type="text" name="txtJokeText" value="<?php echo $jokeVar["RiddleText"]?>">
            </label>
            <br>
            <label>Grap uitkomst:</label>
            <label>
                <input type="text" name="txtJokeAnswer" value="<?php echo $jokeVar["RiddleAnswer"]?>">
            </label>
            <br>
            <label>Grap create datum:</label>
            <label>
                <input type="date" name="dateJokeDate" value="<?php echo $jokeVar["CreateDate"]?>">
            </label>
            <br>
            <label>Grap maker:</label>
            <label>
                <select name="drpJokeCreator">
                    <option value="<?php echo $jokeVar["Creator"]?>">
                    <?php echo $jokeVar["Creator"] ?>
                    </option>
                    <option value="Kaine">Kaine</option>
                    <option value="Marvin">Marvin</option>
                    <br>
            </label>
            <br>
            <label>
                <input type="submit" value="Versturen">
            </label>
        </form>
    </section>
    <br>
    <br>
</main>
<?php
include"../../includes/footer.php";
?>
</body>
