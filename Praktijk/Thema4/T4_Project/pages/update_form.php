<!--
* Author: Kaine van Ommeren
* Date: 14-05-2022
* File: update_form.php
--!>
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
        <link rel="stylesheet" href="../styles/update_form.css">
        <link rel="icon" href="../pictures/KW1C_Rood_Driehoek.png">
        <title>Cosmo Academy Events</title>
    </head>
    <body>
    <header>
        <?php
        include("../functions/navigation.php");
        ?>
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
                    <p class='error'>
                        <?php
                        $EventNummer = $_GET['event'];

                        $query = "SELECT * FROM [Overview] WHERE EventID = " . $EventNummer;


                        $result = executeQuery($query)->fetch(PDO::FETCH_ASSOC);

                        ?>
                    <form action="update_query.php" method="post">
                        <input type="hidden" name="EventID" value="<?php echo $result["EventID"] ?>">
                        <label>Evenement naam:</label>
                        <label>
                            <input type="text" name="EventName" value="<?php echo $result["EventName"]?>">
                        </label>
                        <br>
                        <label>Evenement Start:</label>
                        <label>
                            <input type="text" name="EventStart" value="<?php echo $result["EventStart"]?>">
                        </label>
                        <br>
                        <label>Evenement Einde:</label>
                        <label>
                            <input type="text" name="EventEnd" value="<?php echo $result["EventEnd"]?>">
                        </label>
                        <label>Evenement Locatie:</label>
                        <label>
                            <input type="text" name="EventLocation" value="<?php echo $result["EventLocation"]?>">
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