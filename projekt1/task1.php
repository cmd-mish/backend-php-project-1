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