<!-- Funktioner-->
<?php include "functions.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Projekt 1</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div id="container">
        <!-- Logo och huvudmeny-->
        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>
        <!-- Användardata -->
        <?php include "task1.php" ?>

        <!-- Tid och datum -->
        <?php include "task2.php" ?>

        <!-- Användarinmatning -->
        <?php include "task3.php" ?>

        <!-- Registeringsformulär -->
        <?php include "task4.php" ?>

        <!-- Cookies -->
        <?php include "task5.php" ?>

        <!-- Login -->
        <?php include "task6.php" ?>

        <!-- Besöksräknare -->
        <?php include "task8.php" ?>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <?php include "footer.php" ?>

    </div>
</body>

</html>