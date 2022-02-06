<article>
    <h2>Uppgift 8. Besöksräknare</h2>
    <p>
        <?php
            $remote_user = $_SERVER["REMOTE_USER"];
            $ip_address = $_SERVER["REMOTE_ADDR"];

            $visits_file = fopen("visit_count.txt", "r") or die("Filen gick inte att öppna!");
            $visits_number = intval(fread($visits_file, filesize("visit_count.txt")));
            fclose($visits_file);

            $visits_file = fopen("visit_count.txt", "w") or die("Filen gick inte att öppna!");
            fwrite($visits_file, ($visits_number + 1));
            fclose($visits_file);

            $visits_file = fopen("visit_count.txt", "r") or die("Filen gick inte att öppna!");
            $visits_number = fread($visits_file, filesize("visit_count.txt"));
            print("Totalt har denna sida visats " . $visits_number . " gånger.");
            fclose($visits_file);


            $unique_visits_file = fopen("unique_visit_count.txt", "r") or die("Filen gick inte att öppna!");
            $unique_visits_number = intval(fread($unique_visits_file, filesize("unique_visit_count.txt")));
            fclose($unique_visits_file);

            $log_file = fopen("visit_log.txt", "a+") or die("Det gick inte att öppna visit_log filen!");
            if(strpos(file_get_contents("visit_log.txt"), $ip_address)) {
                // Inte unik besökare
                print(" Du har varit här förut. Antalet unika besökare: " . $unique_visits_number);
            } else {
                // Unik besökare
                $unique_visits_file = fopen("unique_visit_count.txt", "w") or die("Filen gick inte att öppna!");
                fwrite($unique_visits_file, ($unique_visits_number + 1));
                fclose($unique_visits_file);

                $unique_visits_file = fopen("unique_visit_count.txt", "r") or die("Filen gick inte att öppna!");
                $unique_visits_number = fread($unique_visits_file, filesize("unique_visit_count.txt"));
                fclose($unique_visits_file);

                print("Det här är din första gången här! Antalet unika besökare: " . $unique_visits_number);
            }

            fwrite($log_file, $remote_user . ", " . $day . " den " . $date . " " . $time . ", ip: " . $ip_address . "\n");

            fclose($log_file);
        ?>

        <p>
            <a href="./log.php">Visa besökshistorik</a>
        </p>
    </p>
</article>