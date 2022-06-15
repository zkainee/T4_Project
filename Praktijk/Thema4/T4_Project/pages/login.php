<?php
/*
 * Author: Kaine van Ommeren
 * Date: 07-06-2022
 * file: login.php
 */
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
        <link rel="stylesheet" href="../styles/login.css">
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
                <div class="card_form">
                    <p>
                        <h2 class="card__title">Log hier in:</h2>
                    </p>
                <form class="form-style" method="post" action="login_check.php">
                    <label>
                        <p>Gebruikersnaam:</p>
                        <input type="text" name="txtUsername" required>
                    </label>
                    <label>
                        <p>Wachtwoord:</p>
                        <input type="password" name="hidPassword" required>
                    </label>
                    <input type="submit" value="Login">
                </form>
                </div>
            </div>
    </main>
    <?php
    include ("../functions/footer.php");
    ?>
    </body>
</html>

