<?php
//---------------------------------------------------------------------------------------------
$tablica = [
	'test',
	1,
	1.4,
	true,
];

$zmienna = 1;
$zmienna2 = 'tekst';
var_dump($tablica);

echo '<br>';

print_r($tablica);

echo '<br>';

echo '<pre>';
print_r($tablica);
echo '</pre>';

echo "<br>";

echo $tablica[2];
//---------------------------------------------------------------------------------------------
$imiona = [
	11 => "kuba",
	1 => 'dawid',
	2 => 'kacper',
];
echo '<pre>';
print_r($imiona);
echo '</pre>';
//---------------------------------------------------------------------------------------------
$firma = [
	'prezes' => 'Franek',
	'support' => 'zbyszek',
	'itMenager' => 'Karolina',
];

echo $firma['prezes'];

echo '<pre>';
print_r($firma);
echo '</pre>';

$firma['prezes'] = "Adrianna";

echo '<pre>';
print_r($firma);
echo '</pre>';
//---------------------------------------------------------------------------------------------
$array = [
	'wartosc1',
	'wartosc2',
];

echo '<pre>';
print_r($array);
echo '</pre>';

$array[] = "wartosc3";

echo '<pre>';
print_r($array);
echo '</pre>';
//---------------------------------------------------------------------------------------------
$arrayAssoc = [
	'wartosc1' => 'wartosc2',
];
echo '<pre>';
print_r($arrayAssoc);
echo '</pre>';

$arrayAssoc['wartosc3'] = "wartosc4";

echo '<pre>';
print_r($arrayAssoc);
echo '</pre>';