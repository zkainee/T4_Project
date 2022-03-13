<?php
/**
 * User: Kaine van Ommeren
 * Date: 14-02-2022
 * File: T3_REA_Oefening2.2.php
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
                Uitwerking 2.2
            </h2>
            <h3>
                <a href= "https://www.nu.nl/tech/6185349/sociaal-netwerk-van-donald-trump-is-uitgebracht-in-app-store.html">Link artikel</a>
                <img src="images/trump_artikel.PNG" alt="foto trump">
            </h3>
            <?php
            echo "
            <article>
                <h2>
                    Truth Social, het nieuwe sociale netwerk van Donald Trump, is uitgebracht in de App Store van Apple.
                    Het is een alternatief voor Twitter, waar de Amerikaanse oud-president sinds een jaar niet meer welkom is.
                </h2>
                <p>

                    De iOS-app werd al enkele dagen getest door een selecte groep gebruikers. Wanneer de app ook voor Android beschikbaar zal zijn, is niet duidelijk.
                    Truth Social werd in oktober aangekondigd. De app is gemaakt door de Trump Media & Technology Group (TMTG), die volgens Trump een tegenhanger is van linkse mediabedrijven.
                    Het sociale netwerk moet volgens de TMTG in elk geval een plek zonder censuur worden.
                    Op Truth Social kunnen gebruikers een zogenoemde truth (waarheid) plaatsen en kunnen ze truths van anderen delen.
                    Dat gebeurt op dezelfde manier als het retweeten van een bericht op Twitter.
                    Trump was tot hij van Twitter werd verbannen een fanatiek twitteraar.
                    Hij gebruikte het platform om met zijn 88 miljoen volgers te communiceren. Sinds begin januari 2021 kan hij het account niet meer gebruiken, omdat zijn berichten anderen tot geweld zouden hebben aangezet.
                    Ook andere socialemediabedrijven blokkeerden om die reden accounts van Trump. Zo kan hij voorlopig geen gebruik maken van zijn accounts op YouTube en Facebook.
                </p>
            </article>"
            ?>
        </section>
    </main>
    <?php
    include"../../../includes/footer.php";
    echo $footer;
    ?>
    </body>
</html>

