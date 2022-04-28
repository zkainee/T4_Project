<?php

// Plaats een Pixel
if(isset($_GET["hiddenPixelNumber"]) == true && isset($_GET["hiddenPixelColor"]) == true)
{
    $filename = getcwd() . "/pixels.data";
    $line_i_am_looking_for = $_GET["hiddenPixelNumber"];
    $lines = file( $filename , FILE_IGNORE_NEW_LINES );
    $lines[$line_i_am_looking_for] = $_GET["hiddenPixelColor"];
    file_put_contents( $filename , implode( "\n", $lines ) );

   //Gebruiker doorsturen
    header("Location: index.php");
}
?>
