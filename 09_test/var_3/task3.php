<?php 

$rows = 5;
$cols = 5;

$arr = [];

for ( $i = 0; $i < $rows; $i++ ){
	
	for( $j = 0; $j < $cols; $j++ ){
		if( $j == ($cols - $i - 1)){
			$arr[$i][$j] = '0';
		} else {
			$arr[$i][$j] = '-';
		}

	}

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