<!DOCTYPE html>
<!-- 
    Auteur:             Rob JM Wessels
    Aanmaakdatum:       dec 2020
    
    KW1C instructie:    Resultaat opdracht 3.2 thema 2
-->
<html lang="en-us">
    <head>
        <?php
        $title = '<title>The Godfather</title>';
        echo $title;
        ?>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1">
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet_base.css">
    </head>          
    
    <body>

        <header>
            <h1><a href="../index.php">Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .                   
                </ul>
            </nav>
        
            <article>
                <h2>The Godfather</h2>
                <p id="pargodfather">
                    <img id="godfather" src="../images/godfatherfingers.PNG" alt="Fingers">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lectus a risus semper semper nec non lectus. Ut ac pulvinar lectus. Donec rhoncus rutrum tincidunt. Vivamus gravida sed arcu scelerisque dapibus. Sed porta laoreet nulla a consequat. Phasellus mattis, urna in interdum iaculis, sem eros fringilla odio, vel elementum libero nisi placerat urna. Nullam faucibus dui vitae eros lacinia, quis vulputate libero sagittis. 
                    
                </p>
            </article>
            <?php
            include "../includes/bottom.php";
            echo $aside;
            ?>
        </main>

        <footer>
            <p>
                Maak dit scherm breder en smaller om de effecten van een responsive website te zien.
            </p>
            <p id="copyright">
                &copy; Kaine van Ommeren
            </p>
        </footer>
    </body>
</html>
