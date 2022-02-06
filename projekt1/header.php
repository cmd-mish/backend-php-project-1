<header>
    <!-- Logo och meny i headern -->
    <img src="../media/php-icon.svg" alt="Website logo" />
    <div id="logo">Backend</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="../projekt1/">Projekt 1</a></li>
            <li><a href="../projekt2/">Projekt 2</a></li>
            <li><a href="../rapport/">Rapport</a></li>
            <?php
                if(isset($_SESSION["user"])) {
                    print("<li><a href=\"./profile.php\">Profil</a></li>");
                }
            ?>
        </ul>
    </nav>
</header>
