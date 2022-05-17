<?php
/*
 * Author: Kaine van Ommeren
 * Date: 17-05-2022
 * File: secret.php
 */

//Session start
session_start();

//Bepalen of er correct is ingelogd
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == false)
    {
        //Er is ingelogd, pagina start hier::
    }
else
    {
        //Niet ingelogd
        header("Location: index.php");
        die();
    }
?>

