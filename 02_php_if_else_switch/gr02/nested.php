<?php 

$a = -10;
$b = 20;
$c = 100;

if($a <= 0 || $b <= 0 || $c <= 0){
	echo 'nope';
} else {
	if(($a + $b + $c) == 180){
		echo 'yes';
	} else {
		echo 'Nope';
	}//end if sum 180
}//end if not 0