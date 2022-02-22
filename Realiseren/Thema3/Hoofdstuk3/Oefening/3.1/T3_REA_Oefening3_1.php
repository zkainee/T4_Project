<?php
/**
 * User: S. Tudent
 * Date: Date
 * File: T3_REA_Oefening1.1.php
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
                    <li><a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/2.1/T3_REA_Oefening2.1.php">Oefening 2.1</a></li>
                    <li><a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/2.2/T3_REA_Oefening2.2.php">Oefening 2.2</a></li>
                    <li><a href="/Realiseren/Thema3/Hoofdstuk3/Oefening/3.1/T3_REA_Oefening3_1.php">Oefening 3.1</a> </li>
                    </ul>
                </ul>
            </nav>
            <section>
                <h2>
                    Uitwerking Oefening 3.1
                </h2>

                <!-- Plaats je code / uitwerking hieronder -->
                    <?php
                        $holiday = "Carnaval"; // String
                        $lengthHoliday = 3; // Integer
                        $lentLenght = 40; // Integer
                        $countryNetherlands = "Nederland"; // String
                        $dateSunday = "zondag"; // String
                        $dateMonday = "maandag"; // String
                        $dateTuesday = "dinsdag"; // String
                        $dateWednesday = "woensdag"; // String
                        $foodWorstenbrood = "worstenbrood"; // String
                        $foodCoffee = "koffie Schrobbeler"; // String
                        $foodCoffetable = "Brabantse koffietafel";  // String


                        $story =
                        "<p>
                        $holiday is van oorsprong een gekerstend heidens volksfeest. Het duurt 
                        officieel $lengthHoliday dagen, $dateSunday, $dateMonday en $dateTuesday direct voorafgaand aan de 
                        vastentijd van $lentLenght dagen. Carnaval is bij uitstek het feest van zotheid, spot 
                        en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel 
                        $countryNetherlands een gebruik om carnaval op carnavalsvrijdag te openen. Op 
                        As$dateWednesday wordt $holiday afgesloten, maar de tradities verschillen per 
                        regio. In het overgrote deel van Noord-Brabant wordt er afgesloten met 
                        $foodWorstenbrood, $foodCoffee soms met een $foodCoffetable.
                        </p>";
                        echo $story;
                    ?>
                <h2>
                    Taak 2
                </h2>
                <p>
                    <?php
                    $ticket1 = 13;
                    $ticket2 = 21;
                    $ticket3 = 17;

                    $ticketTotal = $ticket1 + $ticket2 + $ticket3;
                    $ticketDivided = $ticketTotal / 4;


                    //Challenge                                 10%
                    $ticketTotalWithCoupon = $ticketTotal - 50 + 5.1 / 4;

                    echo "<p> Het totaalbedrag is " . $ticketTotal . " euro. </p>";
                    echo "<p> Kosten per persoon bedragen " . $ticketDivided . " euro. </p>";
                    echo "<p> Kosten met 10%+ fooi & 50 coupon eraf is " . $ticketTotalWithCoupon . " euro. </p>";
                    ?>
                </p>
            </section>
        </main>
    </body>
</html>

