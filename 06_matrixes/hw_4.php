<?php 

$arr = [1, 7, 9, 0, 5, 6, 0, 0, 2, 3, 4];
// $flag = true;
$check = 1;
$max_len = 1;

$count = count($arr);

for($i = 1; $i < $count; $i++){
	if($arr[$i] > $arr[$i-1]){
		$check++;
	} else {
		if($check > $max_len){
			$max_len = $check;
		}
		echo 'check = ' . $check . ' ';
		$check = 1;		
	}
}
echo 'check = ' . $check . ' ';
if($check > $max_len){
			$max_len = $check;
		}
echo 'max_len = ' . $max_len;