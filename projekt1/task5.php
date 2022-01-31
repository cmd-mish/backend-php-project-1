<article>
    <h2>Uppgift 5. Cookies</h2>
    <p>
        <?php
            if (!isset($_COOKIE["username"]) || !isset($_COOKIE["first_visit"])) {
                $cookie_name = "username";
                $cookie_value = $_SERVER["REMOTE_USER"];
                setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/"); // Tillgänglig i 2 dygn
                print("Välkommen, " . $cookie_value . "!");

                $first_visit_name = "first_visit";
                // Använder uppgift 2 för att få datumet
                $first_visit_value = " den " . $date . " " . $time;
                
                setcookie($first_visit_name, $first_visit_value, time() + (86400 * 365), "/");
            } else {
                print("Välkommen tillbaka, " . $_COOKIE["username"] . "!<br>");
                print("Ditt första besök var " . $_COOKIE["first_visit"] . ".");
            }
        ?>

       
    </p>
</article>
