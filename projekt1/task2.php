<article>
    <h2>Uppgift 2. Tid och datum</h2>
    <p>
        <?php
            $day = date("l");
            $date = date("d F Y");
            $time = date("G:i");
            $week = date("W");

            $days = array(
                "Monday" => "måndag", 
                "Tuesday" => "tisdag",
                "Wednesday" => "onsdag",
                "Thursday" => "torsdag",
                "Friday" => "fredag", 
                "Saturday" => "lördag",
                "Sunday" => "söndag"
            );

            $months = array(
                "January" => "januari",
                "February" => "februari",
                "March" => "mars",
                "April" => "april",
                "May" => "maj",
                "June" => "juni",
                "July" => "juli",
                "August" => "augusti",
                "September" => "september",
                "October" => "october",
                "November" => "november",
                "December" => "december"
            );

            $day = str_replace(array_keys($days), array_values($days), $day);
            $date = str_replace(array_keys($months), array_values($months), $date);
            $week = str_replace("0", "", $week);

            print("Nu är det " . $day . " den " . $date . " " . $time . ", veckonummer:  " . $week . ".");
        ?>
    </p>
</article>
<div class="separator"></div>