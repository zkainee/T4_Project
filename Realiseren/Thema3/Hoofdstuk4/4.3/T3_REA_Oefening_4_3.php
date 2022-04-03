<?php
/**
 * User: Kaine van Ommeren
 * Date: 15-03-2022
 * File: T3_REA_Oefening4_3.php
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
                Uitwerking oefening 4.3
            </h2>
           <p>
               <?php
               include"../../includes/functions.php";
               echo GetUnixTime();
               ?>
               <hr>
                <?php
                echo CalculateInterest(2000, 1000);
                ?>
                <hr>
                <?php
                echo CreatePiramid(1);
                ?>
                <hr>
           </p>
        </section>
    </main>
    <?php
    include"../../includes/footer.php";
    ?>
    </body>
</html>
