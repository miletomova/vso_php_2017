<?php 

$arr = [0, -1, 10, 25, 1];

$count = count($arr);
for($i = 0; $i < $count; $i++){
	if($arr[$i] !== 0){
		$min = $arr[$i];
		$minInd = $i;
		break;
	}
}

for($i = $minInd; $i<$count; $i++){
	if($arr[$i] < $min && $arr[$i] !== 0){
		$min = $arr[$i];
		$minInd = $i;
	}
}

echo $min;