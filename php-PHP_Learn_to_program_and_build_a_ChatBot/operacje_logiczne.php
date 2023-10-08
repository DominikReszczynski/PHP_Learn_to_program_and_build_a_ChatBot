<?php

$czyPadaDzisiajDeszcz = false;

if($czyPadaDzisiajDeszcz){
	echo "tak<br>";
} elseif ($czyPadaDzisiajDeszcz === false) {
	echo "załóż czapkę!<br>";
} 
else {
	echo 'nie<br>';
}

$deszcz = true;
$slonce = false;
$wiatr = true;

if ($deszcz && $wiatr && $slonce === false){
	echo "ubierz się ciepło z i<br>";
}

if ($deszcz || $slonce) {
	echo "hydro zagadka z lub<br>";
}