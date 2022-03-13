<?php
/**
 * User: Kaine van Ommeren
 * Date: 27-02-2022
 * File: T3_REA_Oefening3.2.php
 */
?>
<!DOCTYPE html>
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
                    Uitwerking oefening 3.2
                </h2>
                <p>
                    <?php
                        echo "In deze oefening gaan we een template creeeren waar de header, nav en footer worden ingesloten met php.";
                    ?>
                </p>
            </section>
        </main>
        <?php
        include"../../../includes/footer.php";
        echo $footer;
        ?>
    </body>
</html>

