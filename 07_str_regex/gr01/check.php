<?php 

$arr = ['á',1, 'addda', 3, 'daffa'];
$count = count($arr);
// for($i = 0; $i<$count; $i++){
// 	if(!is_numeric($arr[$i])){
// 		echo 'not a number' . ' ';
// 	} else {
// 		echo 'number'.' ';
// 	}
// }

foreach ($arr as $value) {
	if(!is_numeric($value)){
		echo 'not a number' . ' ';
	} else {
		echo 'number'.' ';
	}
}