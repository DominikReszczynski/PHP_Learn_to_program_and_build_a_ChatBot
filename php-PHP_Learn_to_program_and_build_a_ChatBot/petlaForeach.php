<?php

$colours = [
	'black',
	'yellow',
	'white',
	'blue',
];
foreach ($colours as $color) {
	echo 'my favorite color is ' . $color.PHP_EOL . '<br>';
}

$cars = [
	'audi' => 'Q7',
	'mercedes' => 'A2137',
]; 

foreach ($cars as $brand => $car) {
	echo 'my favorite car is ' . $brand . " brand " . $car.PHP_EOL;
}