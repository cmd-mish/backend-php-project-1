<article>
    <h2>Uppgift 9. Gästbok</h2>
    <p>
        <form action="index.php" method="post">
            Din kommentar: <input type="text" name="comment" size="70">
            <button type="submit">Skicka</button>
        </form>

        <?php
            if (!empty($_REQUEST["comment"])) {
                $comment_content = $remote_user . ", " . $day . " den " . $date . " " . $time . ": " . test_input($_REQUEST["comment"]) . "\n";
                
                $comment_file = fopen("guestbook.txt", "a") or die("Det gick inte att skicka kommenrar!");
                fwrite($comment_file, $comment_content);
                fclose($comment_file);
            }
        ?>

        <h3>Tidigare kommentarer</h3>

        <?php
            $comment_file = file("guestbook.txt");
            $comment_file = array_reverse($comment_file);
            
            foreach ($comment_file as $entry) {
                print($entry . "<br>");
            }
        ?>
    </p>
</article>