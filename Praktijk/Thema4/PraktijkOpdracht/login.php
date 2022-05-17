<?php
    // Inladen van database functionaliteiten
    include "db_functions.php";

    // Start de database connectie
    startConnection();

    //Start de session
    session_start();

    //Inlog query
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    $query = "SET NOCOUNT ON; USE PraktijkOpdracht; SELECT * FROM Users WHERE Username = '$username' AND Password = '$password' ";
    echo $query; // Echo om de query te kunnen dubbelchecken

$resultaat = executeQuery($query);

// Haal een row op uit het resultaat
$row = $resultaat->fetch(PDO::FETCH_ASSOC);

//Bepahlen of er correct is ingelogd
if ($row == false)
{
    // Foutieve poging
    echo "<p style='color: red'> Foutieve poging. <a href='index.php'>Probeer opnieuw</a></p>";
}
else
{
    echo "<p style='color: green'>Login succesvol! <a href='secret.php'>Ga naar de pagina</a></p>";
    //Opslaan in de se $_SESSION dat er correct is ingelogd.
    $_SESSION['loggedIn'] = true;
}
?>
