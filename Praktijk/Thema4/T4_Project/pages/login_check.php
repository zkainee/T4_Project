<!--
Author: Kaine van Ommeren
Date: 14-06-2022
File: login_check.php
--!>
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
            <a href="../index.php">Homepagina</a>
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
            include("../functions/db_functions.php");

            // Start session
            session_start();

            //Start connect met de database
            startConnection();

            if(!isset($_POST["txtUsername"]))
            {
                $_POST["txtUsername"] = "";
            }
            if(!isset($_POST["hidPassword"]))
            {
                $_POST["hidPassword"] = "";
            }

            $username = $_POST["txtUsername"];
            $password = $_POST["hidPassword"];

            $_SESSION["txtUsername"] = $username;
            $_SESSION["hidPassword"] = $password;

                //query users
                $query = "SET NOCOUNT ON; USE CosmoAcademy; SELECT * FROM [Login] WHERE Username = '$username' AND Password = '$password' ";

                //query editors
                $queryEditor = "SET NOCOUNT ON; USE CosmoAcademy; SELECT * FROM [LoginEditor] WHERE Username = '$username' AND Password = '$password'";

                $resultaat = executeQuery($query);

                // Row uit resultaat
                $row = $resultaat->fetch(PDO::FETCH_ASSOC);

                // check voor editors
                if ($row == false)
                {
                    $resultaat = executeQuery($queryEditor);

                    $row = $resultaat->fetch(PDO::FETCH_ASSOC);
                    if($row == false)
                    {
                        echo "<p style='color: red; font-size:x-large; text-align: center;'> Gebruikersnaam en/of wachtwoord verkeerd,</p> <a style='font-size:x-large; display: flex; margin-left: auto; margin-right: auto; max-width: 12%;' ' href='./login.php'>Probeer opnieuw</a>";
                    }
                    else
                    {
                        header("location: ./overview.php");
                    }
                }
                // Anders
                else
                {
                    header("location: ./overview_user.php");
                }
            ?>
                </h2>
            </div>
    </main>
    <?php
    include ("../functions/footer.php");
    ?>
    </body>
</html>
