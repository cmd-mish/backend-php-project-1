<article>
    <h2>Uppgift 7. Ladda upp profilbilder</h2>
    <p>
    <?php
        if (isset($_SESSION["user"])) {
            print("Du kan ladda upp och bläddra dina profilbilder på <a href=\"./profile.php\">din profilsida</a>.");
        } else {
            print("Logga in (uppgift 6) för att hantera profilbilder!");
        }
        
        ?>
    </p>
</article>