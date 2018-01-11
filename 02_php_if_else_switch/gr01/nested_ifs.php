<?php 

$a = 0;
$b = 10;

if( ($a === 0) || ($b===0) ){
	echo 'a or b is 0';
} else {
	if( $a > $b ) {
		echo $a;
	} else {
		echo $b;
	}//end if a > b
}// if a or b is 0