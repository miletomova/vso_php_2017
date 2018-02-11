<?php 

$rows = 5;
$cols = 6;

$add = 4;

$arr = [];

for ( $i = 0; $i < $rows; $i++ ){
	$num = $i+1;
	for( $j = 0; $j < $cols; $j++ ){
		
		$arr[$i][$j] = $num;
		$num = $num + $add;

	}

	$add = $add+10;

}

echo "<table border=1>";

for( $m = 0; $m < $rows; $m++){

	echo "<tr>";

	for( $n = 0; $n < $cols; $n++ ){
		echo "<td>" . $arr[$m][$n] . "</td>";
	}

	echo "</tr>";
}

echo "</table>";