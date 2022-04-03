<?php
    /*
     * Author: Kaine van Ommeren
     * Date: 21-03-2022
     * File: Oefening5_1.php
     */
?>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
<?php
include"../../includes/header.php";
echo $header;
?>
    <main id="wrapper">
        <?php
        include"../../includes/navigation.php";
        echo $navigation;
        ?>
        <section>
            <h2>
                Uitwerking oefening 5.1
            </h2>
            <h3>
                Uitschrijfformulier KW1C
            </h3>
        <hr>
            <form method="get" action="./Oefenining5_1-resultaat.php">
                <table>
                    <tr>
                        <td>
                            <label>Voor en achternaam</label>
                        </td>
                        <td>
                            <label>
                                <input type="text" name="txtVoorAchternaam" required minlength="2">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Studentnummer</label>
                        </td>
                        <td>
                            <label>
                                <input type="text" name="txtStudentnummer" required>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Datum van uitschrijving</label>
                        </td>
                        <td>
                            <label>
                                <input type="date" name="dateUitschrijving" required>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Reden van uitschrijving</label>
                        </td>
                        <td>
                            <label>
                                <select name="slcUitschrijving">
                                    <option value="z">Niet de juiste studie gekozen.</option>
                                    <option value="x">Prive situatie veranderd.</option>
                                    <option value="c">Geen goede leeromgeving.</option>
                                    <option value="v">Anders, namelijk.</option>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Leerjaar</label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="radLeerjaar" value="1">Leerjaar 1<br>
                                <input type="radio" name="radLeerjaar" value="2">Leerjaar 2<br>
                                <input type="radio" name="radLeerjaar" value="3">Leerjaar 3
                            </label>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" name="chbSuccesklas" value="yes">
                            </label>
                        </td>
                        <td>
                            <label>
                                Ik wil me aanmelden bij de succesklas.
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" name="chbGegevens" value="yes">
                            </label>
                        </td>
                        <td>
                            <label>
                                Verwijder mijn gegevens uit het systeem.
                            </label>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <label>Geef hieronder de reden van uitschrijving op</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <textarea rows="5" cols="100" name="txtRedenuitschrijving"></textarea>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Versturen">
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
    <?php
    include"../../includes/footer.php";
    ?>
</body>

