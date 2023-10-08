<?php
$tablica = [
	11 => 'test',
	1679 => 1,
	1.4,
	4 => true,
];

echo count($tablica);
//---------------------------------------------------------------------------------------------
array_push($tablica, "motor", 'wheels', 'front mirror');

echo '<pre>';
print_r($tablica);
echo '</pre>';
//---------------------------------------------------------------------------------------------
$deleteLast = array_pop($tablica);

echo $deleteLast;

echo '<pre>';
print_r($tablica);
echo '</pre>';
//---------------------------------------------------------------------------------------------
ksort($tablica);

echo '<pre>';
print_r($tablica);
echo '</pre>';
//---------------------------------------------------------------------------------------------
rsort($tablica);

echo '<pre>';
print_r($tablica);
echo '</pre>';
//---------------------------------------------------------------------------------------------
echo in_array('motor', $tablica);