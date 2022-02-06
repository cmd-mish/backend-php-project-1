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
                print("Ditt användarman är: " . $_SESSION["user"] . "<br>");
                header("Refresh:5; url=./profile.php");
            }
        ?>
    </p>
</article>