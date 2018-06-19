<?php

$myFile = "general.json";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_GET["data"] . PHP_EOL;
fwrite($fh, $stringData);
fclose($fh)

?>