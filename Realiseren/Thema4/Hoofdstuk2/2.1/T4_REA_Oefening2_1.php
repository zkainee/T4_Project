<?php
/*
 * Author: Kaine van ommeren
 * Date: 28-04-2022
 * file: T4_REA_Oefening1_1.php
 */
// Open de database connectie en ODBC driver
include "../../includes/db_functions.php";
startConnection();
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
        <p>
            <?php
            $query = "SELECT * FROM tblRiddles WHERE Creator <> 'Admin'";
            $result = executeQuery($query);
            ?>
        </p>
    </section>
</main>
<?php
include"../../../includes/footer.php";
?>
</body>

