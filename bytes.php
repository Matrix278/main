<?php
    $number=$_POST['number'];
    $select2=$_POST['select2'];
    switch($_POST['select1']){
        case "1":
            if($select2=="1"){
                echo $number." Байт"." = ".$number." Байт";
            }elseif($select2=="2"){
                $bToKb=$number * 0.001;
                echo $number." Байт"." = ".$bToKb." КилоБайт";
            }elseif($select2=="3"){
                $bToMb=$number * 0.0000010;
                echo $number." Байт"." = ".$bToMb." МегаБайт";
            }elseif($select2=="4"){
                $bToGb=$number * 1.0E-9;
                echo $number." Байт"." = ".$bToGb." ГигаБайт";
            }elseif($select2=="5"){
                $bToTb=$number * 1.0E-12;
                echo $number." Байт"." = ".$bToTb." ТераБайт";
            }
            break;
                
        case "2":
            if($select2=="1"){
                $kbToB=$number * 1000;
                echo $number." КилоБайт"." = ".$kbToB." Байт";
            }elseif($select2=="2"){
                echo $number." КилоБайт"." = ".$number." КилоБайт";
            }elseif($select2=="3"){
                $kbToMb=$number * 0.001;
                echo $number." КилоБайт"." = ".$kbToMb." МегаБайт";
            }elseif($select2=="4"){
                $kbToGb=$number * 1.0E-6;
                echo $number." КилоБайт"." = ".$kbToGb." ГигаБайт";
            }elseif($select2=="5"){
                $kbToTb=$number * 1.0E-9;
                echo $number." КилоБайт"." = ".$kbToTb." ТераБайт";
            }
            break;
            
        case "3":
            if($select2=="1"){
                $mbToB=$number * 1000000;
                echo $number." МегаБайт"." = ".$mbToB." Байт";
            }elseif($select2=="2"){
                $mbToKb=$number * 1000;
                echo $number." МегаБайт"." = ".$mbToKb." КилоБайт";
            }elseif($select2=="3"){
                echo $number." МегаБайт"." = ".$number." МегаБайт";
            }elseif($select2=="4"){
                $mbToGb=$number * 0.001;
                echo $number." МегаБайт"." = ".$mbToGb." ГигаБайт";
            }elseif($select2=="5"){
                $mbToTb=$number * 1.0E-6;
                echo $number." МегаБайт"." = ".$mbToTb." ТераБайт";
            }
            break;
            
        case "4":
            if($select2=="1"){
                $gbToB=$number * 1000000000;
                echo $number." ГигаБайт"." = ".$gbToB." Байт";
            }elseif($select2=="2"){
                $gbToKb=$number * 1000000;
                echo $number." ГигаБайт"." = ".$gbToKb." КилоБайт";
            }elseif($select2=="3"){
                $gbToMb=$number * 1000;
                echo $number." ГигаБайт"." = ".$gbToMb." МегаБайт";
            }elseif($select2=="4"){
                echo $number." ГигаБайт"." = ".$number." ГигаБайт";
            }elseif($select2=="5"){
                $gbToTb=$number * 0.001;
                echo $number." ГигаБайт"." = ".$gbToTb." ТераБайт";
            }
            break;
            
        case "5":
            if($select2=="1"){
                $tbToB=$number * 1000000000000;
                echo $number." ТераБайт"." = ".$tbToB." Байт";
            }elseif($select2=="2"){
                $tbToKb=$number * 1000000000;
                echo $number." ТераБайт"." = ".$tbToKb." КилоБайт";
            }elseif($select2=="3"){
                $tbToMb=$number * 1000000;
                echo $number." ТераБайт"." = ".$tbToMb." МегаБайт";
            }elseif($select2=="4"){
                $tbToGb=$number * 1000;
                echo $number." ТераБайт"." = ".$tbToGb." ГигаБайт";
            }elseif($select2=="5"){
                echo $number." ТераБайт"." = ".$number." ТераБайт";
            }
            break;
        
    }
    
    ?>