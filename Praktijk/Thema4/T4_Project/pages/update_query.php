<?php
    // uitvoeren van de query in de database
    include("../functions/db_functions.php");

    //Start verbinding
    startConnection();

        // Alle post variable zijn correct (niet leeg)
        $updateQuery = "
                    UPDATE [Overview] 
                    SET EventName = '" . $_POST["EventName"] ."',
                        EventStart = '" . $_POST["EventStart"] ."',
                        EventEnd = '" . $_POST["EventEnd"] ."',
                        EventLocation = '". $_POST["EventLocation"] . "' 
                    WHERE EventID = " . $_POST["EventID"] ."
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
