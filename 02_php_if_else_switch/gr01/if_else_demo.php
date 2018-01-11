<?php 

$a = 5;
$b = '5';

//var_dump($a !== $b);

if($a > $b){
	echo 'a='.$a;
} elseif( $a < $b ) {
	echo 'b='.$b;
} else {
	echo 'a=b';
}