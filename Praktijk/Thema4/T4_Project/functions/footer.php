<?php
$date = date("d-m-Y");
?>
<footer>
    <?php
    echo $date;
    if(empty($_SESSION["txtUsername"]) && empty($_SESSION["hidPassword"]))
    {
        echo "<p> Onbekende gebruiker</p>";
    }
    else
    {
        echo "<p>Welkom " . $_SESSION["txtUsername"]. "</p>";
    }

    ?>
</footer>
