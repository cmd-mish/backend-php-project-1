<article>
    <h2>Uppgift 4. Registeringsformulär</h2>
    <p>
        <form action="index.php" method="post">
            Användarnamn: <input type="text" name="username"><br>
            E-post: <input type="text" name="email"><br>
            <input type="submit" name="send" value="Skapa konto">
        </form>

        <?php
            if (!empty($_POST["username"]) && !empty($_POST["email"])) {
                $username = test_input($_POST["username"]);
                $email = test_input($_POST["email"]);

                $password = generate_random_password();

                print("Vi har skapat kontot " . $username . "! Lösenordet skickats till " . $email);

                mail($email, "Your password for " . $username, $password);
            }
        ?>
    </p>
</article>
