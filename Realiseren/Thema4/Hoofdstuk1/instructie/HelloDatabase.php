<?php

// Select * From Klanten

$PDO = new PDO("odbc:odbc2sqlserver");

//Database query uitvoeren
$PDO->query("SELECT * FROM tblRiddles");
