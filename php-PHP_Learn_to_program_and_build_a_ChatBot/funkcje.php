<?php

function obliczSkladkeUbezpieczenia($markaSamochodu){
	$ubez = null;
	switch ($markaSamochodu) {
		case "mercedes":
			$ubez = 200;
			break;
		case "bmw":
			$ubez = 150;
			break;
		case 'value':
			$ubez = 100;
			break;
		
		default:
			echo "porozmawiaj z kimś innym ";
			break;
	}
	return $ubez;
}

echo obliczSkladkeUbezpieczenia("mercedes");
echo obliczSkladkeUbezpieczenia("bmw");
echo '<br>';
function suma($liczba, $liczba2){
	return $liczba2 + $liczba;
}

echo suma(1234,545546);
echo '<br>';
echo strlen("Hello World!");
echo '<br>';
echo "Hello World!";
echo '<br>';
echo trim("    z trim Hello World!");