<?php  

$array = [1, 2, 3, 4, 5];
var_dump($array);

$count = count($array);
for($i = 0; $i < $count; $i++){
	echo $array[$i];
}

$array = [1=>100, 3=>150, 4=>18, 5=>15];
$count = count($array);
for($k = 0; $k <= 5; $k++){
	echo $array[$k];
}
// $array = ['a' => 100, 'b'=>150, 'c'=>18, 'd'=>15];