<?php 

$str = 'The harder the life, the sweeter the song';

$arr_str = explode(' ', $str);

$count = count($arr_str);

for($i = 0; $i < $count; $i++){

	$current_len 	= strlen($arr_str[$i]);
	$current_word 	= str_split($arr_str[$i]);

	for ( $j=1; $j < $current_len; $j++) { 
		$current_word[$j] = '*';
	}

	$arr_str[$i] = implode('', $current_word);
}

$str = implode(' ', $arr_str);

echo $str;