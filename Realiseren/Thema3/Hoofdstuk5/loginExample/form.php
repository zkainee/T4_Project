<?php
    /*
     * Author: Kaine van Ommeren
     * Date: 22-03-2022
     * File: form.php
     */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            Instructie
        </title>
    </head>
    <body>
        <h1>
            Login systeem
        </h1>
        <form method="post" action="login.php">
            <label>Username</label>
            <input type="text" name="txtUsername">

            <br>
            <label>Password</label>
            <input type="password" name="txtPassword">

            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
