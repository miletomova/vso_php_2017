<?php 

$str = 'Head over heels';
$str_arr = explode(' ', $str);
$count = count($str_arr);

for( $i = 0; $i < $count; $i++ ){

	$current_len = strlen( $str_arr[$i] );
	$str_arr[$i] = str_split($str_arr[$i]);

	if( $current_len % 2 === 0 ){		

		for( $j = 0; $j < $current_len; $j++ ){
			
			$str_arr[$i][$j] = ord($str_arr[$i][$j]);
		}

		$str_arr[$i] = implode(' ', $str_arr[$i]);

	}//if even length
	else {
		for( $k = 0; $k < $current_len; $k++ ){
			
			$str_arr[$i][$k] = $str_arr[$i][$k].$str_arr[$i][$k];
		}

		$str_arr[$i] = implode(' ', $str_arr[$i]);
	}
}

$str = implode(' ', $str_arr);

echo $str;