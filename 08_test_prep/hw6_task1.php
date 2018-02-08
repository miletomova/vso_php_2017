<?php 

$arr = [
		[1, 2, 3],
		[-1, 2, -3],
		[4, 0, 6],
			];


$col_mins = [];

	for($i = 0; $i < 3; $i++){

		$min = $arr[0][$i];

		for($j = 1; $j < 3; $j++){
			if($arr[$j][$i] < $min){
				$min = $arr[$j][$i];
			}

		}
		$col_mins[] = $min;
	}

	var_dump($col_mins);

	