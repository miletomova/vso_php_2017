<?php

// No pain no gain

$str = 'No pain no gain';

$arr_str = explode(' ', $str);

$count = count($arr_str);

for($i = 0; $i < $count; $i++){

	$current_len 	= strlen($arr_str[$i]);
	$current_word 	= str_split($arr_str[$i]);

	for ($j=0; $j < $current_len-1; $j+=2) { 
		$current_word[$j] = ord($current_word[$j]) - 1;
		$current_word[$j] = chr($current_word[$j]);
		
		$current_word[$j+1] = ord($current_word[$j+1]) + 1;
		$current_word[$j+1] = chr($current_word[$j+1]);
		
	}

	$arr_str[$i] = implode('', $current_word);
}

$str = implode(' ', $arr_str);

echo $str;