<article>
    <h2>Uppgift 3. Användarinmatning</h2>
    <p>
        <form action = "index.php" method = "get">
            Dag: <input size = "5" type = "text" name = "day"><br>
            Månad: <input size = "5" type = "text" name = "month"><br>
            År: <input size = "5" type = "text" name = "year"><br>
            <input type = "submit" name = "skicka" value = "Räkna">
    </p>
    <p>
        <?php
            if (!empty($_GET["day"]) && !empty($_GET["month"]) && !empty($_GET["year"])) {
                    $input_day = $_GET["day"];
                    $input_month = $_GET["month"];
                    $input_year = $_GET["year"];
                
                if (($input_day > 0) && ($input_day <= 31) && 
                    ($input_month > 0) && ($input_month <= 12) &&
                    ($input_year > 0) && ($input_year <= 9999)) {
                    $timenow = time();
                    $giventime = mktime(0, 0, 0, $input_month, $input_day, $input_year);

                    $day_of_week = date("l", $giventime);

                    // Använder uppgift 2 för att översätta veckodagsnamn till svenska
                    $day_of_week = str_replace(array_keys($days), array_values($days), $day_of_week);

                    if ($timenow > $giventime) {
                        $time_difference = $timenow - $giventime - 7200;

                        // Hur mycket tid (timmar, minuter, sekunder) det finns kvar
                        $time_passed = date("G i s", $time_difference);
                        $time_passed = explode(" ", $time_passed);


                        // Hur många dygn det finns kvar tills nu
                        $days_passed = floor($time_difference / 60 / 60 / 24);

                        
                        print("Datumet var " . $day_of_week . ". Det har gott " . $days_passed . " dygn, " . $time_passed[0] . " timmar, " . $time_passed[1] . " minuter och " . $time_passed[2] . " sekunder sedan det. \n");
                    } else {
                        $time_difference = $giventime - $timenow - 7200;

                        $time_left = date("G i s", $time_difference);
                        $time_left = explode(" ", $time_left);

                        $days_left = floor($time_difference / 60 / 60 / 24);

                        print("Datumet är " . $day_of_week . ". Det kommer om " . $days_left . " dygn, " . $time_left[0] . " timmar, " . $time_left[1] . " minuter och " . $time_left[2] . " sekunder.");
                    }
                    
                } else {
                    print("Invalid input!");
                }
            } else {
                print("Flyll in alla fält i formuläret!");
            }
        ?>
    </p>
</article>