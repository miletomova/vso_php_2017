<?php 

// 2, 9 even
// 2, 0 zero
// 33, 19 odd


$a = 33;
$b = 19;
$c = $a*$b;

if($c === 0){
	echo 'zero';
} elseif ($c%2 === 0){
	echo 'even';
} elseif ($c%2 !== 0){
	echo 'odd';
}