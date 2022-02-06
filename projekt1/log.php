<!-- Funktioner-->
<?php include "functions.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Projekt 1 - Besökshistorik</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div id="container">
        <!-- Logo och huvudmeny-->
        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <h2>Besökshistorik</h2>
            <?php
                $log_file = fopen("visit_log.txt", "r") or die("Det gick inte att öppna visit_log filen!");
                
                while(!feof($log_file)) {
                    print(fgets($log_file) . "<br>");
                }

                fclose($log_file);
            ?>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>