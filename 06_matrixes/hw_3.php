<?php 
$arr = ['nmd', 'mamama', 'rtrh', 'rtt,p', 'rrtdcew', 'oopxbbzzzz', 'dd'];

$count = count($arr);
$min_len = strlen($arr[0]);
$max_len = strlen($arr[0]);

for($i = 1; $i < $count; $i++){
	if(strlen($arr[$i]) < $min_len){
		$min_len = strlen($arr[$i]);
	}
	if(strlen($arr[$i]) > $max_len){
		$max_len = strlen($arr[$i]);
	}
}

echo $min_len . ' ' . $max_len;
