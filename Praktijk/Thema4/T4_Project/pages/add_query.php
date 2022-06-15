<?php
// uitvoeren van de query in de database
include("../functions/db_functions.php");

//Start verbinding
startConnection();

$start = date_format(date_create($_POST["EventStart"]), 'Y-m-d H:i:s');
$end = date_format(date_create($_POST["EventEnd"]), 'Y-m-d H:i:s');

// Alle post variable zijn correct (niet leeg)
$updateQuery = "
    INSERT INTO [Overview] 
    VALUES ('" . $_POST["EventName"] ."', '$start', '$end', '". $_POST["EventLocation"] . "')
";

//        echo $updateQuery;

//Uitvoeren query UPDATE
$rowsAffected = executeIntoQuery($updateQuery);

if ($rowsAffected > 0)
{
    header("location: ./overview.php");
}
else
{
    echo "<p>UPDATE MISLUKT</p>";
}

?>
