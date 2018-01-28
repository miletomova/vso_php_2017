<?php 
$arr = [];
$col = 6;
$row = 7;
$num = 1;

for($i = 0; $i < $row; $i++){
	if($i % 2 == 0){
	for($j=0; $j < $col; $j++){
		$arr[$i][$j] = $num;
		$num++;
	}
	} else {
		for($j = $col-1; $j >= 0; $j--){
		$arr[$i][$j] = $num;
		$num++;
	}
	}
}
echo '<pre>';
var_dump($arr);
echo '</pre>';