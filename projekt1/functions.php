<?php
    function translate_day($day) {
        $days = array(
            "Monday" => "måndag", 
            "Tuesday" => "tisdag",
            "Wednesday" => "onsdag",
            "Thursday" => "torsdag",
            "Friday" => "fredag", 
            "Saturday" => "lördag",
            "Sunday" => "söndag"
        );

        $day = str_replace(array_keys($days), array_values($days), $day);
        return $day;
    }

    function translate_month($month) {
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

        $month = str_replace(array_keys($months), array_values($months), $month);
        return $month;
    } 

    //  Funktionen skyddar emot skadlig användarinmatning
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //  Funktionen skapar ett slumpmässigt lösenord
    function generate_random_password() {
        $symbols = "!#$%&()*+,-./0123456789:;=?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[]^_abcdefghijklmnopqrstuvwxyz";
        $password_length = rand(8, 20);
        $password = "";

        for ($i = 0; $i < $password_length; $i++) {
            $password .= $symbols[rand(0, strlen($symbols) - 1)];
        }

        return $password;
    }
?>