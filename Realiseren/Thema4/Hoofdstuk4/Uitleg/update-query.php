<?php
// uitvoeren van de query in de database
include("../../includes/db_functions.php");

//Start verbinding
startConnection();

//Maken en uitvoeren van de update query
$updateQuery = "";

if (empty($_POST["txtJokeText"]) == false &&
    empty($_POST["txtJokeAnswer"]) == false &&
    empty($_POST["dateJokeDate"]) == false &&
    empty($_POST["drpJokeCreator"]) == false &&
    empty($_POST["hidRiddleId"]) == false
)
{
    // Alle post variable zijn correct (niet leeg)
    $updateQuery = "
        UPDATE tblRiddles 
        SET RiddleText = '" . $_POST["txtJokeText"] ."',
            RiddleAnswer = '" . $_POST["txtJokeAnswer"] ."',
            Creator = '" . $_POST["drpJokeCreator"] ."',
            CreateDate = '". $_POST["dateJokeDate"] . "' 
        WHERE Id = " . $_POST["hidRiddleId"] ."
        ";

    echo $updateQuery;

    //Uitvoeren query UPDATE
    $rowsAffected = executeIntoQuery($updateQuery);

    if ($rowsAffected > 0)
    {
        echo "<p>UPDATE SUCCESVOL!</p>";
        echo "<a href='index.php'>Terug</a>";
    }
    else
    {
        echo "<p>UPDATE MISLUKT</p>";
    }

}
else
{
    echo "<p class='error'> ERROR: Geen waarde opgegeven. </p>";
    echo "<a onclick='history.back()'>Terug</a>";
}