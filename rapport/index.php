<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Rapport</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div id="container">
        <!-- Logo och huvudmeny-->
        <?php include "../elements/header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>
            <article>
                <h2>Projekt 1</h2>
                <p>Det här projektet om grunderna i PHP inom backend-programmering kursen har redan given mig massor värdefull information om hur webbsidorna utföras på serversidan. De mesta utmanande uppgifterna var uppgift 3, 6 och 8. </p>
                <p>I uppgift 3 var det jobbigt att få tidräknare funka korrekt och visa exakta tiden som finns kvar till datumet. </p>
                <p>Uppgift 6 verkade nästan för lätt men slutligen spenderade jag ganska mycket tid på att skapa profilsidan och få den funka i samband med uppgift 7.</p>
                <p>Uppgift 8 var den svåraste uppgiften för att det tog många försök att fundera ut hur man skriver om filer med ett nytt värde. Eventuellt kom jag på att öppna och stänga varje fil varje gång det behövs att göra någonting med den.</p>
                <p>Till slut fick jag alla uppgifter att funka. Jag ser fram emot för att lära mig mera om databaser i projekt 2! </p>
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <?php include "../elements/footer.php" ?>

    </div>
</body>

</html>