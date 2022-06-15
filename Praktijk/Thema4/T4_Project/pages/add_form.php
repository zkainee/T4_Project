<?php
include("../functions/db_functions.php");

startConnection();
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
//                    $EventNummer = $_GET['event'];
//
//                    $query = "SELECT * FROM [Overview] WHERE EventID = " . $EventNummer;
//
//
//                    $result = executeQuery($query)->fetch(PDO::FETCH_ASSOC);

                    ?>
                    <form action="add_query.php" method="post">
                        <input type="hidden" name="EventID">
                        <label>Evenement naam:</label>
                        <label>
                            <input type="text" name="EventName">
                        </label>
                        <br>
                        <label>Evenement Start:</label>
                        <label>
                            <input type="datetime-local" name="EventStart">
                        </label>
                        <br>
                        <label>Evenement Einde:</label>
                        <label>
                            <input type="datetime-local" name="EventEnd">
                        </label>
                        <br>
                        <label>Evenement Locatie:</label>
                        <label>
                            <input type="text" name="EventLocation">
                        </label>
                        <br>
                        <br>
                        <label>
                            <input type="submit" value="Versturen">
                        </label>
                    </form>
                </h2>
            </div>
    </main>
    <?php
    include ("../functions/footer.php");
    ?>
    </body>
    </html>
<?php
