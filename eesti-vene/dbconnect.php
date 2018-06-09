<?php
$host = "localhost";
$user = "id2178577_martin";
$psswd = "nitram27";
$link = mysqli_connect($host, $user, $psswd);
mysqli_select_db($link, "id2178577_translator");
mysqli_query($link, "SET NAMES utf8");
?>
