<?php
    // Inladen van database functionaliteiten
    include "db_functions.php";

    // Start de database connectie
    startConnection();

    //Inlog query
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    $query = "USE PraktijkOpdracht; SELECT * FROM Users WHERE Username = '$username' AND Password = '$password' ";
    echo $query; // Echo om de query te kunnen dubbelchecken

$resultaat = executeQuery($query);
?>
