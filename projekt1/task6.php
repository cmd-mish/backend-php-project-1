<article>
    <h2>Uppgift 6. Login</h2>
    <p>
        <form action="index.php" method="post">
            Användarnamn: <input type="text" name="user">
            <button type="submit">Logga in</button>
        </form>
        <?php
            if (!empty($_REQUEST["user"])) {
                $_SESSION["user"] = test_input($_REQUEST["user"]);
                print("Du har loggats in! Välkommen, " . $_SESSION["user"] . "!<br>");
                header("Refresh:5; url=./profile.php");
            }

            if (isset($_SESSION["user"])) {
                print("<br>Du är inloggat som " . $_SESSION["user"] . ". <a href=\"./profile.php\">Till profilsidan</a>");
            }
        ?>
    </p>
</article>