<html>
<head>
    <title>Tweede scherm </title>
</head>
<body style="font-family: arial;">

<?php
session_start();

$username = $_GET['username'];
$password = $_GET['password'];

$_SESSION['username'] = $username;

$ingelogd = "U bent succesvol ingelogd, ";
$button = "
<form action = \"personal_page.php\">
    <input type = \"submit\" value = \"Naar je personal page\" >
</form>
";

switch([$username, $password])
{
    case ["rob", "holymoly"]:
        echo "</br>$ingelogd $username</br>";
        echo $button;
        break;
    case ["ed", "kroket"]:
        echo "</br>$ingelogd $username</br>";
        echo $button;
        break;
    default:
        echo "</br>Niet correct ingelogd";
}
?>

</body>
</html>