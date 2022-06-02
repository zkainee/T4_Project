<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>
        Log in
    </title>
</head>
<body style="font-family: arial;">
<h1>PRA voorbeeld</h1>

<?php
    if(isset($_SESSION['username']))
    {
        echo "Hallo " . $_SESSION['username'];
    }
?>

<form action="loggedin.php" method="get">

    <h3>Inlogscherm</h3>
    <strong>Vul hier je naam en wachtwoord in</strong>
    <br>
    <label >Gebruikersnaam</label><br>
    <input type="text"  name="username">
    <br>
    <label >Wachtwoord</label><br>
    <input type="password"  name="password">
    <br><br>
    <input type="submit" value="inloggen">

</form>

</body>
</html>
