<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Projekt 1</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Logo och huvudmeny-->
        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Uppgift 1. Användardata</h2>
                <p>
                    
                    <?php
                        print("Hejsan " . $_SERVER["MELLON_displayName"] . "!<br>");
                        print("Din offentliga IP adress är: " . $_SERVER["REMOTE_ADDR"] . "<br>");
                        print("Serverns namn är: " . $_SERVER["SERVER_NAME"] . "<br>");
                        print("Serverns IP adress är: " . $_SERVER["SERVER_ADDR"] . "<br>");
                        print("Apache version: " . $_SERVER["SERVER_SOFTWARE"] . "<br>");
                        print("PHP version: " . phpversion());
                    ?>
                </p>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Uppgift 2. Tid och datum</h2>
                <p></p>
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>