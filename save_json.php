<?php

$myFile = "general.json";
//$fh = fopen($myFile, 'w') or die("can't open file");
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_GET["data"];
fwrite($fh, $stringData);
fclose($fh)

?>