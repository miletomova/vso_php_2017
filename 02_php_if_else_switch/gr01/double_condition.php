<?php 

$a = 2;
$b = 8;

if(( $a === 0) || ( $b === 0 )){
	echo 'zero';
} elseif (( $a%2 !== 0 ) && ( $b%2 !== 0 )){
	echo 'odd';
} elseif ( ( $a%2 ===0 ) || ( $b%2 === 0)){
	echo 'even';
}