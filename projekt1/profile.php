<!-- Funktioner-->
<?php include "functions.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Projekt 1 - Profilsidan</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div id="container">
        <!-- Logo och huvudmeny-->
        <?php include "../elements/header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <?php
                if(isset($_SESSION["user"])) {
                    print("<h2>Hej, " . $_SESSION["user"] . "!</h2>");
                    include "profile_pic.php";
                } else {
                    print("<br>Du måste logga in!");
                }
            ?>

            

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <?php include "../elements/footer.php" ?>

    </div>
</body>

</html>