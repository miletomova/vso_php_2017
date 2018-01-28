<?php 

$arr = [2, 2, 2, 2, 2, 3, 0, 5, 5, 5, 6, 6];
$max_len = 1;
$el = $arr[0];
$count = count($arr);
$check = 1;

for($i = 1; $i < $count; $i++){
	if($arr[$i] == $arr[$i-1]){
		$check++;
	} else {
		if($max_len < $check){
			$max_len = $check;
			$el = $arr[$i-1];			
		}
		$check = 1;
	}
}

if($max_len < $check){
	$max_len = $check;
	$el = $arr[$count-1];
}

 echo 'el ' . $el . ' - ';
 echo 'max_len='.$max_len;
