<?php 
$a = 9;
$b = 10;
$c = false;

switch ($a) {
	case ($a>$b):
		echo 'zero';
		break;		
	case 1:
		echo 'one';		
	case 2:
		echo 'two';
		break;
	case 5:
		echo 'five';
		break;
	
	default:
		echo 'Something';
		break;
}