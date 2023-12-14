<?php 
    date_default_timezone_set("Europe/Tallinn"); 
    $time = date("H"); 

    if($time >= 19 || $time < 07){ 
        echo "Night"; 
    }else{ 
        echo "Day"; 
    }
    echo "  ".$time;
?>