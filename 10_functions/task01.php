<?php 

function sum($arg1, $arg2){
	$res = $arg1 + $arg2;
	echo $res;
}


function sum1($arg1, $arg2){
	$res = $arg1 + $arg2;
	return $res;
}

$number = sum1(2, 3);
echo $number;

echo "-";

echo sum1(2, 3);