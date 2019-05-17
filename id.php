<?php

$numbers=$_POST['numbers'];
/*$dlina=strlen[$numbers];
if($dlina>11){
    echo "Должно быть 11 цифр";
}elseif($dlina<11){
    echo "Должно быть 11 цифр";
}*/
if($numbers[0]==3){
    $gender="Мужчина";
    $id=19;
    echo $gender;
}
if($numbers[0]==4){
    $gender="Женщина";
    $id=19;
    echo $gender;
}
if($numbers[0]==5){
    $gender="Мужчина";
    $id=20;
    echo $gender;
}
if($numbers[0]==6){
    $gender="Женщина";
    $id=20;
    echo $gender;
}
//----------------------------Год------------------------------//
$god=$id.$numbers[1].$numbers[2];
echo "<br>".$god;

//---------------------------Месяца-----------------------------//

if($numbers[3]==0 && $numbers[4]==1){
    $mesjats="Январь";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==2){
    $mesjats="Февраль";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==3){
    $mesjats="Март";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==4){
    $mesjats="Апрель";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==5){
    $mesjats="Май";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==6){
    $mesjats="Июнь";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==7){
    $mesjats="Июль";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==8){
    $mesjats="Август";
    echo " ".$mesjats;
}
if($numbers[3]==0 && $numbers[4]==9){
    $mesjats="Сентябрь";
    echo " ".$mesjats;
}
if($numbers[3]==1 && $numbers[4]==0){
    $mesjats="Октябрь";
    echo " ".$mesjats;
}
if($numbers[3]==1 && $numbers[4]==1){
    $mesjats="Ноябрь";
    echo " ".$mesjats;
}
if($numbers[3]==1 && $numbers[4]==2){
    $mesjats="Декабрь";
    echo " ".$mesjats;
}elseif($numbers[3]>=2 && $numbers[4]>=10){
    echo "<br>"."Не существет такого месяца"."<br>";
}

//-----------------------------День----------------------------------//

/*if($numbers[3]==0 && $numbers[4]==2){
   $data=$numbers[5]<2.$numbers[6]<8; 
}else{
 $data=$numbers[5].$numbers[6];   
}*/

$day=$numbers[5].$numbers[6];
if($day<=31){
    echo " ".$day;
}
if($day>=32){
    echo "<br>"."Не существует такой даты";
}

//----------------------------Больница-----------------------------//

$bolnitsa=$numbers[7].$numbers[8].$numbers[9];

$Kuressaare= range (001,010,1);

$Naistekliinik = range (011,019,1);

$IdaTallinnaKesk = range (021,220,1);

$IdaViruKesk = range (221,270,1);

$Jõgeva = range (271,370,1);

$Narva = range (371,420,1);

$Pärnu = range (421,470,1);

$Pelgulinna = range (471,490,1);

$Järvamaa = range (491,520,1);

$Rakvere = range (521,570,1);

$Valga = range (571,600,1);

$Viljandi = range (601,650,1);

$Põlva = range (651,710,1);

if (in_array($bolnitsa, $Kuressaare)) {
echo "<br>Вы родились в больнице на Курессааре";
    
}else if (in_array($bolnitsa, $Naistekliinik)) {
echo "<br>Вы родились в Женской клинике в Тарту";
    
}else if (in_array($bolnitsa, $IdaTallinnaKesk)) {
echo "<br>Вы родились в Таллиннской Центральной больнице";
    
}else if (in_array($bolnitsa, $IdaViruKesk)) {
echo "<br>Вы родились в Ida-Viru Центральной больнице";
    
}else if (in_array($bolnitsa, $Jõgeva)) {
echo "<br>Вы родились в Maarjamõisa больница в Тарту";
    
}else if (in_array($bolnitsa, $Narva)) {
echo "<br>Вы родились в Нарвской больнице";
    
}else if (in_array($bolnitsa, $Pärnu)) {
echo "<br>Вы родились в Пярнуской больнице";
    
}else if (in_array($bolnitsa, $Pelgulinna)) {
echo "<br>Вы родились в Pelgulinna больница (Tallinn), Хаапсалу больница";
    
}else if (in_array($bolnitsa, $Järvamaa)) {
echo "<br>Вы родились в Järvamaa больница (Paide)";
    
}else if (in_array($bolnitsa, $Rakvere)) {
echo "<br>Вы родились в Раквере, Тапа больница";
    
}else if (in_array($bolnitsa, $Valga)) {
echo "<br>Вы родились в Валгаской больница";
    
}else if (in_array($bolnitsa, $Viljandi)) {
echo "<br>Вы родились в Вильяндийской больница";
    
}else if (in_array($bolnitsa, $Põlva)) {
echo "<br>Вы родились в больнице на юге Эстонии в городе Выру ";
    
}else{
    echo "<br>Ошибка";
}

//------------------Контрольное число (11 цифра)----------------------//

$poslednaja=(1*$numbers[0])+(2*$numbers[1])+(3*$numbers[2])+(4*$numbers[3])+(5*$numbers[4])+(6*$numbers[5])+(7*$numbers[6])+(8*$numbers[7])+(9*$numbers[8])+(1*$numbers[9]);
$kontrolnaja=floor($poslednaja/11);
/*if($kontrolnaja=>10){
    
}*/
echo "<br>"."Контрольное число: ".$kontrolnaja;
?>