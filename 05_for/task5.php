<?php 

$x = 10;
$y = 1000;

$arr = [];

for( $i = 0; $i < 10; $i++){
	$arr[$i] = rand($x, $y);
}
echo '<pre>';
var_dump($arr);
echo "</pre>";

for( $k = 0; $k < 10; $k++){
	echo $arr[$k] .' ';
}