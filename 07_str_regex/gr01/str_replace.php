<?php 

$str = "testT a strAing";

for($i = 0; $i<strlen($str); $i++){
	if(ord($str[$i]) >= 65 && ord($str[$i]) <= 90 ){
	echo $str[$i] . ' - ';
}
}