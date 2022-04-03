<?php
/*
 * Author: Kaine van Ommeren
 * Date: 27-03-2022
 * File: Oefening5_2.php
 */
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
            <h1>
                Inloggen
            </h1>
            <p>
                Welkom op onze website <br>
                Na corret in de loggen, krijgt u toegang tot onze schatkist. Deze is dan voor u, om te gebruiken!
            </p>
            <form method="post" action="Oefening5.2-resultaat.php">
                <label>Username</label>
                <input type="text" name="txtUsername">

                <br>
                <label>Password</label>
                <input type="password" name="txtPassword">

                <br>
                <input type="submit" value="Verzenden">
            </form>
        </section>
    </main>
    <?php
    include"../../includes/footer.php";
    ?>
</body>

