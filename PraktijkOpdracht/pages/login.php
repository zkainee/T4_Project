<?php
    // Inladen van database functionaliteiten
    include "../function/db_functions.php";

    // Start de database connectie
    startConnection();

    //Start de session
    session_start();

    //Inlog query
    if (isset($_POST["txtUsername"]))
    {
        $username = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];
        $query = "SET NOCOUNT ON; USE Kuijpers; SELECT * FROM [Login] WHERE Username = '$username' AND Password = '$password' ";
        // Echo om de query te kunnen dubbelchecken

        $resultaat = executeQuery($query);

        // Haal een row op uit het resultaat
        $row = $resultaat->fetch(PDO::FETCH_ASSOC);

        //Bepahlen of er correct is ingelogd
        if ($row == false)
        {
            // Foutieve poging
            echo "<p style='color: red'> Foutieve poging. <a href='../index.php'>Probeer opnieuw</a></p>";
            session_destroy();
        }
        else
        {
            echo "<p style='color: green'>Login succesvol! <a href='secret.php'>Ga naar de pagina</a></p>";
            //Opslaan in de se $_SESSION dat er correct is ingelogd.
            $_SESSION['loggedIn'] = true;
        }
    }
?>
<!doctype html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/login.css">
        <title>Kuijpers: Login</title>
    </head>
    <body>
    <form method="post" action="login.php" class="parent">
        <p>
            Username:
        </p>
        <input type="text" name="txtUsername" required>
        <p>
            Password:
        </p>
        <input type="password" name="txtPassword" required>
        <input type="submit" value="Login">
    </form>
    <img src="../pictures/kuijpers_overzicht.png" class="kuijpersBackground_fix">
    </body>
</html>