<?php
$fileEst=fopen("Eesti.txt", "r");
$fileReadEst=fread($fileEst, filesize("Eesti.txt"));
$oneEstonian=explode("\n", $fileReadEst);
$estonian=Array();
foreach ($oneEstonian as $estKey => $estValue) {
  $estonian[$oneEstonian[$estKey]]=$oneEstonian;
}
fclose($fileEst);

$fileRus=fopen("Russian.txt", "r");
$fileReadRus=fread($fileRus, filesize("Russian.txt"));
$oneRussian=explode("\n", $fileReadRus);
$russian=Array();
foreach ($oneRussian as $rusKey => $rusValue) {
  $russian[$oneRussian[$rusKey]]=$oneRussian;
}
fclose($fileRus);

for ($i=0; $i < count($estonian); $i++) {
  //echo $estonian[$i]." / ".$russian[$i];
}
$mysql=mysqli_query($link, "INSERT INTO estrus VALUES('$russian[$i]', '$estonian[$i]')");
?>
