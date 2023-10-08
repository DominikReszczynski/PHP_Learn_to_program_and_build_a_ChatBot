<?php

$zmienna = 'poniedziałek';

switch ($zmienna) {
	case 'poniedziałek':
		echo "dzisiaj jest poniedziałek";
		break;
	case 'wtorek':
	case 'środa':
		echo 'dzisiaj nie ma poniedziałku';
		break;
	
	default:
		echo 'coś ty tam za dzień wpisał';
		break;
}