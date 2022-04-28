<?php
/*
 * Author: Kaine van Ommeren
 * Date: 31-03-2022
 * File: Oefening6_3.php
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
                Uitwerking oefening 6.3
            </h2>
            <hr>
                <form id="gameFrm" method="get" action="">
                    <div class="float"><input type="radio"
                                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                              value="steen"><img src="./images/rock.png" width="100" height="100"></div>
                    <div class="float"><input type="radio"
                                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                              value="papier"><img src="./images/paper.png" width="100" height="100"></div>
                    <div class="float"><input type="radio"
                                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                              value="schaar"><img src="./images/scissors.png" width="100" height="100"></div>
                </form>
            <?php
            // if statement van de get waarde 'keuze'
            if (isset($_GET['keuze']))
            {
                //sessie starten
                session_start();

                //Controleren of er een session is met de naam 'gebruiker1'
                if (isset($_SESSION['gebruiker1']) == false)
                {
                    $_SESSION['gebruiker1'] = 0;
                    $_SESSION['gebruiker2'] = 0;
                }

                $keuze = $_GET['keuze'];

                // array aanmaken van de soorten keuzes
                $opties = array("steen", "papier", "schaar");

                // Random getal voor keuze
                $computerkeuzegetal = rand(0,2);

                // twee variables een maken
                $computerkeuze = $opties[$computerkeuzegetal];

                echo "Je hebt gekozen voor: $keuze ";
                echo "Je hebt de keuze gemaakt: $keuze <img src='./images/{$_GET['keuze']}.jpg'>";
                echo "De computer heeft gekozen voor: $computerkeuze <img src='./images/{$computerkeuze}.jpg'> ";

                //Gelijkspel
                if ($keuze == $computerkeuze)
                {
                    echo "Draw! <br>";
                }
                elseif($keuze == "schaar" && $computerkeuze == "papier")
                {

                }
                elseif($keuze == "steen" && $computerkeuze == "schaar")
                {

                }
                elseif ($keuze == "papier" && $computerkeuze == "steen")
                {
                    echo "Je hebt gewonnen!";

                    $_SESSION['gebruiker1'] += 1;
                }
                else
                {
                    echo "De computer heeft gewonnen";
                    $_SESSION['gebruiker2'] += 1;
                }
                echo "De score is " . $_SESSION['gebruiker1'] . " tegen " . $_SESSION['gebruiker2'] . "<br>";

                if ($_SESSION['gebruiker1'] == '5')
                {
                    echo "Je hebt de game gewonnen!";
                    session_destroy();
                }
                elseif ($_SESSION['gebruiker2'] == 5)
                {
                    echo "Je hebt verloren, de computer heeft gewonnen!";
                    session_destroy();
                }
            }
            ?>
        </section>
    </main>
<?php
include"../../includes/footer.php";
?>
</body>

