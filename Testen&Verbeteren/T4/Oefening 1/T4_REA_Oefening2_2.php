<?php

// Name: Kaine van Ommeren
// Date: 07/05/2022

// Subject: Oefening 2.2
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaine's raadsels</title>
    <link href="./styles/style.css" rel="stylesheet">
</head>
<body>
<?php

include("../../includes/db_functions.php");


// Hier wordt de header toegevoegd door middel van de "includes" functie

include("../../includes/header.php");
echo $header;

?>
<main>

    <?php

    include("../../includes/navigation.php");
    echo $navigation;

    echo "<br><h1> Uitwerking:</h1><br> ";

    ?>


    <br>
    <fieldset>
        <legend>Zoekopdrachten:</legend>
        <i>Tip: Laat een veld leeg, dan zal er niet op gezocht worden.</i>
        <br><br>
        <form action='T4_REA_Oefening2_2.php' method='get'>
            <label for="txtRiddleText">Raadsel:</label>
            <input type="text" name="txtRiddleText">
            <br><br>
            <label for='txtCreator'>Maker:</label>
            <input type='text' name='txtCreator'>
            <br><br>
            <input type='submit' value='Versturen'>
        </form>
    </fieldset>
    <br>


    <?php

    if(!isset($_GET["txtRiddleText"]))
    {
        $_GET["txtRiddleText"] = "";
    }
    if(!isset($_GET["txtCreator"]))
    {
        $_GET["txtCreator"] = "";
    }

    if(empty($_GET["txtRiddleText"] == true) && empty($_GET["txtCreator"] == true))
    {
        $query = "SELECT * FROM tblRiddles";
    }

    elseif(empty($_GET["txtCreator"] == true) && empty($_GET["txtCreator"] == false))
    {
        $query = "SELECT * FROM tblRiddles WHERE RiddleText LIKE '%" . $_GET["txtRiddleText"] . "%'";
    }

    elseif(empty($_GET["txtCreator"] == false) && empty($_GET["txtCreator"] == false))
    {
        $query = "SELECT * FROM tblRiddles WHERE RiddleText LIKE '%" . $_GET["txtRiddleText"] . "%' AND Creator='". $_GET["txtCreator"] . "'";
    }

    elseif(empty($_GET["txtCreator"] == false) && empty($_GET["txtCreator"] == true))
    {
        $query = "SELECT * FROM tblRiddles WHERE Creator = '" . $_GET["txtCreator"] . "'";
    }
    else
    {
        $query = "SELECT * FROM tblRiddles";
    }


    echo "<p>" . $query . "</p>";

    startConnection();

    $result = executeQuery($query);

    echo "<table border='1'>";
    echo "<tr><th> ID: </th>";
    echo "<th>Raadsel: </th>";
    echo "<th>Oplossing: </th>";
    echo "<th> Bedenker: </th>";
    echo "<th>Datum: </th></tr>";
    // Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><th>" . $row["Id"] .  "</th>";
        echo "<td>" . $row["RiddleText"] .  "</td>";
        echo "<td id='tdAnswer' ><span>" . $row["RiddleAnswer"] .  "</span></td>";
        echo "<td>" . $row["Creator"] .  "</td>";
        echo "<td>" . $row["CreateDate"] .  "</td></tr>";
    }

    ?>

</main>
<?php

include("../../includes/footer.php");

?>
</body>
</html>
