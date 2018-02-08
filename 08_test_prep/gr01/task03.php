<?php 
$rows = 5;
$cols = 4;
$num = 7;
$arr = [];
$currentNum = 0;
for ($i = 0; $i < $rows; $i++){	
	// $arr[$i]['dummy'] = 'dummy';
	// $arr[$i][100] = 'dummy-100';
	for($j = 0; $j < $cols; $j++){
		$arr[$i][$j] = $num;
		$num += 110;
	}
	$num = 7*($i+2);
}

echo "<table border='1'>";
for($m = 0; $m < $rows; $m++){
	echo "<tr>";
	foreach ($arr[$m] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";