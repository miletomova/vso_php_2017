<?php 

$rows = 7;
$cols = 5;
$arr = [];
$temp = 40;
$help = 0;
for($i = 0; $i < $rows; $i++){	
	for($j=0; $j<$cols; $j++){		
		$arr[$i][$j] = ($i+1) + $help;
		
		$help = ($help + 4)*10;
	}
	
	$help= 0;
	
}

echo '<pre>';
var_dump($arr);
echo '</pre>';
