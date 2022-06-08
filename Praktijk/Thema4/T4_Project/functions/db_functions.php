<?php

$pdo = null;
function startConnection()
{
    global $pdo;
// Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
}

// Uitvoeren van een query
function executeQuery($sql)
{
    global $pdo;
    // Uitvoeren van een SQL query
    try
    {
        // Query uitvoeren
        return $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen van gegevens: ' . $e->getMessage();
        die();
    }
}
function executeIntoQuery($query)
{
    global $pdo;
    $rowsAffected = 0;
    try
    {
        //Voer de SQL query uit op de database
        $rowsAffected = $pdo->exec($query);
    }
    catch(PDOException $exception)
    {
        $rowsAffected = 0;
        echo "<p style='color: red'>ERROR: Er is een error opgetreden: <br> " . $exception->getMessage() . "</p>";
    }
    return $rowsAffected;
}
?>


