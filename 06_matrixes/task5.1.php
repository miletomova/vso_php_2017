<?php 
$arr = [];
$num = 1;
$rows = 4;
$cols = 5;

for($j=0; $j < $rows; $j++){
	for($i = 0; $i<$cols; $i++){
		$arr[$j][$i] = $num;
		$num++;
	}
}

// echo "<pre>"; 
// var_dump($arr);
// echo "</pre>";
echo "<table border=1>";
for($m=0; $m < $rows; $m++){
	echo '<tr>';
	for($n = 0; $n<$cols; $n++){
		echo '<td>'.$arr[$m][$n].'</td>';
		
	}
	echo '</tr>';
}
echo "</table>";
