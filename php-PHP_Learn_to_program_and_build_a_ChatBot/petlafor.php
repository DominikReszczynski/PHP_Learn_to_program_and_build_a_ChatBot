<?php

// for ($i = 0 ; $i < 5 ; $i++) {
// 	echo $i.PHP_EOL;
// }

// wypisz liczby od 1 do 10 
for ($i = 1 ; $i <= 10 ; $i++){
	echo $i.PHP_EOL;
}
echo '<br>';

//wypisz parzyste liczby o 1 do 100
for ($i = 1 ; $i <= 100 ; $i++){
	if ($i%2 === 0) {
		echo $i.PHP_EOL;
	}
}
echo '<br>';

//wypisz liczby od 10 do 1
for ($i = 10 ; $i > 0 ; $i--){
	echo $i.PHP_EOL;
}
echo '<br>';