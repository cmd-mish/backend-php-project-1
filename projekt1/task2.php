<article>
    <h2>Uppgift 2. Tid och datum</h2>
    <p>
        <?php
            $day = date("l");
            $day = translate_day($day);

            $date = date("d F Y");
            $date = translate_month($date);

            $time = date("G:i:s");
            
            $week = date("W");
            $week = str_replace("0", "", $week);

            print("Nu är det " . $day . " den " . $date . " " . $time . ", veckonummer:  " . $week . ".");
        ?>
    </p>
</article>
<div class="separator"></div>