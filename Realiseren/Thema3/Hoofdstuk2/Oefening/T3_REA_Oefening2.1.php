<?php
/**
 * User: Kaine van Ommeren
 * Date: 14-02-2022
 * File: T3_REA_Oefening2.1.php
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
    <header>
        <h1>
            <?php
            echo 'Uitwerkingen van PHP-oefeningen';
            ?>
        </h1>
    </header>
    <?php
    //Hier gaan we in het volgende hoofdstuk het menu toevoegen.
    ?>
    <main id="wrapper">
        <nav>
            <h2>Thema 3</h2>
            <ul>
                <li>Hoofdstuk 1:</li>
                <ul>
                    <li><a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.1</a></li>
                    <li><a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.2.php">Oefening 2.2</a></li>
                </ul>
            </ul>
        </nav>
        <section>
            <h2>
                Uitwerking
            </h2>
            <h3>
                <?php
                echo "Git & Github"
                ?>
            </h3>
            <p>
                <?php
                echo "Git is een programma die het gemakkelijk maakt voor software developers om code te delen. 
                Deze tool is voornaamst handig om code van elkaar te bekijken zonder bestanden naar elkaar te sturen want. 
                Github is daarentegen de tool om code die van Git af komt gemakkelijk te delen via een website. 
                Ze kan per project alle code zien van anderen die gepushed zijn zonder maar er ook iets voor te downloaden. 
                Een project word ook wel genoemd een 'repository', en zo kan je ordenen op respository in Github.
                <br>
                Git brengt een hele aantal snufjes met zich mee om het leven van een developer nog makkelijker te maken.
                Door middel van een 'commit' uit te voeren in Git slaat hij als het ware jouw code lokaal op. 
                Ook heb je de 'push' tool waarmee je jouw code kan delen naar Github wat vervolgens bekeken kan worden door anderen.
                'Clone' is een tool waarmee jij een repository kan kopieren en zelf code aan toe kan voegen / verwijderen. 
                "
                ?>
            </p>

            <!-- Plaats je code / uitwerking hieronder -->
            <p>
                <?php
                /*
                 * Echo is een element in PHP waarmee je code vanuit PHP naar een website kan projecteren.
                 * Zie het als ware bijv. al schreeuw je door een tunnel en je roept een keer 'echo' dan hoor je dat meerdere malen
                 * en zo projecteert dat zich.
                 */
                echo "PHP is een dynamische programmeertaal die het mogelijk maakt om code te genereren naar een client vanaf een webserver. <br>
                Zo is het mogelijk om complexe systemen met vertrouwelijke informatie te creeeren en op te slaan in een database. <br>
                Je runt in feite PHP op een webserver die gelinked is aan een database waar de informatie opgeslagen staat. <br>
                Tijdens het schrijven van PHP werk je client-side (wat de client ziet) en server-side (wat een client niet ziet).";
                ?>
            </p>
        </section>
    </main>
    </body>
</html>

