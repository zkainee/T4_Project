<?php
    /*
     * Author: Kaine van Ommeren
     * Date: 22-03-2022
     * File: Oefening5_1-resultaat.php
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
            <hr>
            <form method="post" action="Oefening5_1.php">
                <table>
                    <tr>
                        <td>
                            <label>
                                Voor en achternaam:
                            </label>
                        </td>
                        <td>
                            <?php
                            $userName = $_GET["txtVoorAchternaam"];
                            echo $userName;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Studentennummer:
                            </label>
                        </td>
                        <td>
                            <?php
                            $studentNumber = $_GET["txtStudentnummer"];
                            echo $studentNumber;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Datum van uitschrijving:
                            </label>
                        </td>
                        <td>
                            <?php
                            $dateWriteOut = $_GET["dateUitschrijving"];
                            echo $dateWriteOut;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Reden van uitschrijving:
                            </label>
                        </td>
                        <td>
<!--                            --><?php
//                            $reasonWriteOut = ["slcUitschrijving"];
//                            echo $reasonWriteOut;
//                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Leerjaar:
                            </label>
                        </td>
                        <td>
                            <?php
                            $gradeYear = $_GET["radLeerjaar"];
                            echo $gradeYear;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Aanmeldden bij de succesklas:
                            </label>
                        </td>
                        <td>
                            <?php
                            $registerSuccesklas = $_GET["chbSuccesklas"];
                            echo $registerSuccesklas;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Verwijderen gegevens:
                            </label>
                        </td>
                        <td>
<!--                            --><?php
//                            $eraseData = $_GET["chbGegevens"];
//                            echo $eraseData;
//                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Reden van uitschrijving:
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            $writOutReason = $_GET["txtRedenuitschrijving"];
                            echo $writOutReason;
                            ?>
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

